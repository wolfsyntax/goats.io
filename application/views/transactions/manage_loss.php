<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formUserEdit"></span>
    <hr class="my-4">
    
    <!-- form user info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><i class="fas fa-book"></i></i>&nbsp;</i>Manage Loss</h3>
        </div>
        
        <div class="card-body" >
            <?php echo form_open('',array('class'=>'mt-5','style'=>'')); ?>

            <div class="form-group row"> 
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Eartag Number</label>                           
                
                <div class="col-lg-6">
                    <input class="form-control" type="text" value="" >
                </div>

            </div>


            <div class="form-group row"> 
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Cause of Loss</label>                           
                
                <div class="col-lg-6">
                    <select class="form-control" id="Loss">
                        <option>Deceased</option>
                        <option>Lost</option>
                        <option>Stolen</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">  
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Notes</label>    
                
                <div class="col-lg-6">
                    <textarea class="form-control" id="exampleMessage"></textarea>
                </div>
            </div>

            <div class="form-group row">
                    
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Date of Loss:</label>
                                                
                <div class="col-lg-6">
                                                
                    <input class="form-control" type="date" value="yyyy-mm-dd" id="example-date-input">
                                                
                </div>
                            
            </div>

            <div class="form-group row">
                
                <label class="form-control-label" style="margin-left:130px;"></label>
                
                <div class="col-lg-9 mt-2">
                    
                    <input type="button" class="btn btn-primary" value="Submit Loss">
                
                </div>
            </div>
                                 
            <?= form_close(); ?>
        </div>
    </div>
</div>
