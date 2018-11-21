
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formUserEdit"></span>
    <hr class="my-3">

        <!-- form user info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Add Goat</h3>
        </div>
            
        <div class="card-body">
        <!--form class="form" role="form" autocomplete="off"-->
        <?= form_open('', array('class'=> 'form')); ?>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">EarTag ID:</label>
                        
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="eartag_id">
                </div>

            </div>
                    
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Tag Color:</label>

                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="eartag_color">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label form-control-label">Body Color:</label>

                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="body_color">
                </div>

            </div>
                    
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Birthdate:</label>
                        
                <div class="col-lg-9">

                    <input class="form-control" type="date" value="yyyy-mm-dd" id="example-date-input" name="birth_date">

                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Website</label>
                        
                <div class="col-lg-9">

                    <input class="form-control" type="url" value="">

                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Gender:</label>
                        
                <div class="col-lg-9">

                    <label class="form-check-label">
                                &nbsp; &nbsp; &nbsp;

                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male

                    </label>
                            
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                             &nbsp;&nbsp;&nbsp;

                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female

                        </label>

                    </div>

                </div>

            </div>
                                
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Sire Tag ID</label>

                <div class="col-lg-9">
                    <input class="form-control" type="url" value="">
                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Dam Tag ID</label>

                <div class="col-lg-9">
                    <input class="form-control" type="url" value="">
                </div>

            </div>
                                
            <div class="form-group row">
                        
                <label class="col-lg-2 col-form-label form-control-label"></label>
                        
                <div class="col-lg-9">
                    
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                            
                    <input type="button" class="btn btn-primary" value="Save Changes">

                </div>

            </div>
        <?= form_close(); ?>
        </div>
    </div>
    <!-- /form user info -->
</div>


