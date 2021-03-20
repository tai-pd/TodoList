$(document).ready(function(){
    initDatePicker();
});

function initDatePicker() {  
    $("#datepicker-start, #datepicker-end").datepicker({         
    autoclose: true,         
    todayHighlight: true 
    }).datepicker('update', new Date());
}