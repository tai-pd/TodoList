
<section class="title">
    <header class="container-fluid">
        <h3>Todo List</h3>
    </header>    
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#workModal">Add work</button>
            </div>
            <div class="col-md-12 table-work">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Work name</th>
                            <th scope="col">Start date</th>
                            <th scope="col">End date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($data['work'].lenth > 0) : ?>
                            <tr>
                                <td scope="row">00</td>
                                <td>aa</td>
                                <td>09:00:00 AM</td>
                                <td>21:00:00 AM</td>
                                <td>status</td>
                                <td>edit/delete</td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td class="text-center" colspan="6">Empty Data</td>
                            </tr
                        <?php endif; ?>
                    </tbody>
                </table> 
            </div>
        </div> 
    </div>

    <div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add some work</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="work-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="work-name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Start date</label>
                                    <div id="datepicker-start" class="input-group date" data-date-format="dd-mm-yyyy"> 
                                        <input class="form-control" readonly="" type="text"> 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">End date</label>
                                    <div id="datepicker-end" class="input-group date" data-date-format="dd-mm-yyyy"> 
                                        <input class="form-control" readonly="" type="text"> 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">status</label>
                            <div class="col-md-12" style="display:inline-block">
                                <div class="row">
                                    <div class="col-md-4 no-padding">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="status1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">Planning</label>
                                    </div>
                                    <div class="col-md-4 no-padding">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="status2">
                                        <label class="form-check-label" for="flexRadioDefault2">Doing</label>
                                    </div>
                                    <div class="col-md-4 no-padding">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="status3">
                                        <label class="form-check-label" for="flexRadioDefault2">Complete</label>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../Js/main.js"></script>
