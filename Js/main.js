_MODE=""
_WORKID=-1
$(document).ready(function(){
    initDatePicker();
    initEvents();
});

function initDatePicker() {  
    $("#datepicker-start, #datepicker-end").datepicker({         
    autoclose: true,         
    todayHighlight: true 
    }).datepicker('update', new Date());
}

function initEvents(){
    $('#workModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var mode = button.data('mode')
        var modal = $(this)
        if (mode == "new"){
            modal.find('.modal-title').text('Add new work')
            modal.find('#work-name').val('')
            modal.find('#datepicker-start input').val('')
            modal.find('#datepicker-end input').val('')
            modal.find('#status1').prop('checked',true);
            initDatePicker();
            _MODE="new"
        }
        else if (mode == "edit"){
            var work_id = button.data('work_id')
            var name = button.data('name')
            var start_date = button.data('start_date')
            var end_date = button.data('end_date')
            var status = button.data('status')
            modal.find('.modal-title').text('Modify work id : '+ work_id)
            modal.find('#work-name').val(name)
            modal.find('#datepicker-start input').val(start_date)
            modal.find('#datepicker-end input').val(end_date)
            modal.find('#status'+status).prop('checked',true);
            _MODE="edit"
            _WORKID=work_id;
        } 
    });

    $(document).on('click', '#btn-save', function(){
        if(_MODE=="new"){
            newWork()
        }else if(_MODE=="edit"){
            editWork(_WORKID)
        }
        else{
            return;
        }
    });

    $(document).on('click', '#btn-delete', function(){
        var id = $(this).data('work_id');
        deleteWork(id);
    });
}

function newWork(){
    var url = `${window.location.protocol}//${window.location.host}/index.php?controller=works&action=addWork`
    var name = $('#work-name').val().trim();
    var start_date = $('#datepicker-start input').val();
    var end_date = $('#datepicker-end input').val();
    var status = $('input[name="workStatus"]:checked').val();
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            start_date: start_date,
            end_date: end_date,
            status: status,
        },
        success: function(res){
            if(res.status == true){
                $('#workModal').modal('hide');
                $('.table-work').empty().append(res.table);
            }else{
                $('#workModal').modal('hide');
                $('#modalError').modal('show');
            }
        }
    });
}

function editWork(work_id){
    var url = `${window.location.protocol}//${window.location.host}/index.php?controller=works&action=editWork`
    var name = $('#work-name').val().trim();
    var start_date = $('#datepicker-start input').val();
    var end_date = $('#datepicker-end input').val();
    var status = $('input[name="workStatus"]:checked').val();
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {
            id: work_id,
            name: name,
            start_date: start_date,
            end_date: end_date,
            status: status,
        },
        success: function(res){
            if(res.status == true){
                $('#workModal').modal('hide');
                $('.table-work').empty().append(res.table);
            }else{
                $('#workModal').modal('hide');
                $('#modalError').modal('show');
            }
        }
    });
}

function deleteWork(work_id){
    var url = `${window.location.protocol}//${window.location.host}/index.php?controller=works&action=deleteWork`
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {
            id: work_id
        },
        success: function(res){
            if(res.status == true){
                $('.table-work').empty().append(res.table);
            }else{
                $('#modalError').modal('show');
            }
        }
    });
}