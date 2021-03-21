<div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Add some work</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="work-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="work-name" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Start date</label>
                                <div class='input-group date' id='datetimepicker_start'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker_end'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-form-label">status</label>
                        <div class="col-md-12" style="display:inline-block">
                            <div class="row">
                                <div class="col-md-4 no-padding">
                                    <input  value="1"class="form-check-input" type="radio" name="workStatus" id="status1" checked>
                                    <label class="form-check-label" for="status1">Planning</label>
                                </div>
                                <div class="col-md-4 no-padding">
                                    <input value="2" class="form-check-input" type="radio" name="workStatus" id="status2">
                                    <label class="form-check-label" for="status2">Doing</label>
                                </div>
                                <div class="col-md-4 no-padding">
                                    <input value="3" class="form-check-input" type="radio" name="workStatus" id="status3">
                                    <label class="form-check-label" for="status3">Complete</label>
                                </div>
                            </div>
                        </div>
                    </div>   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="btn-save">Save</button>
            </div>
        </div>
    </div>
</div>