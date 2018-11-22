<?php $this->load->view('includes/user_header'); ?>
<div class="col-md-8 offset-md-2 mt-5">
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
                <?= ($this->session->flashdata('goat') ? $this->session->flashdata('goat') : ''); ?>
                
            </div>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">EarTag ID:</label>
                        
                <div class="col-lg-9">
                    <div class="row">
                        <input class="form-control" type="text" value="" name="eartag_id" placeholder="Ear Tag ID">
                    </div>

                    <div class="row mt-2">
                        <?php echo (form_error('eartag_id')  != "" ? form_error('eartag_id') : ''); ?>
                    </div>
                </div>

            </div>
                    
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Tag Color:</label>

                <div class="col-lg-9">

                    <div class="row">
                        <input class="form-control" type="text" value="<?= set_value('tag_color'); ?>" name="tag_color" placeholder="Ear Tag Color">
                    </div>

                    <div class="row mt-2">
                        <?php echo (form_error('tag_color')  != "" ? form_error('tag_color') : ''); ?>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label form-control-label">Body Color:</label>

                <div class="col-lg-9">
                    
                    <div class="row">
                        <input class="form-control" type="text" value="<?= set_value('body_color'); ?>" name="body_color" placeholder="Body Color">
                    </div>

                    <div class="row mt-2">
                        <?php echo (form_error('body_color')  != "" ? form_error('body_color') : ''); ?>
                    </div>

                </div>

            </div>
                    
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Birthdate:</label>
                        
                <div class="col-lg-9">
                    
                    <div class="row">
                        <input class="form-control" type="date" value="<?= set_value('birth_date'); ?>" id="" name="birth_date" placeholder="Birth Date">
                    </div>
                    
                    <div class="row mt-2">
                        <?php echo (form_error('birth_date')  != "" ? form_error('birth_date') : ''); ?>
                    </div>

                </div>

            </div>

            <!--div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Website</label>
                        
                <div class="col-lg-9">

                    <input class="form-control" type="url" value="">

                </div>

            </div-->

            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Gender:</label>
                        
                <div class="col-lg-9">
                    <div class="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            
                            <label class="btn btn-light active">
                                <input type="radio" name="gender" id="option1" value="Male"> Male
                            </label>

                            <label class="btn btn-light">
                                <input type="radio" name="gender" id="option2" value="Female"> Female
                            </label>

                            
                        </div>
                    </div>

                    <div class="row mt-2">
                        <?= (form_error('gender')  != "" ? form_error('gender') : ''); ?>
                    </div>
                </div>

            </div>
                                
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Sire Tag ID</label>

                <div class="col-lg-9">
                    <div class="row">
                        <input class="form-control" type="text" value="<?= set_value('sire_id'); ?>" name="sire_id" placeholder="Ear Tag ID (Sire)">
                    </div>
                    <div class="row mt-2">
                        <?= (form_error('sire_id')  != "" ? form_error('sire_id') : ''); ?>
                    </div>
                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">Dam Tag ID</label>

                <div class="col-lg-9">
                    <div class="row">
                        <input class="form-control" type="text" value="<?= set_value('dam_id'); ?>" name="dam_id" placeholder="Ear Tag ID (Dam)">
                    </div>
                    <div class="row mt-2">
                        <?= (form_error('dam_id')  != "" ? form_error('dam_id') : ''); ?>
                    </div>
                </div>

            </div>
                                
            <div class="form-group row">
                        
                <label class="col-lg-2 col-form-label form-control-label"></label>
                        
                <div class="col-lg-9">
                    
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                            
                    <input type="submit" class="btn btn-primary" value="Save Changes">

                </div>

            </div>

        <?= form_close(); ?>
        </div>

    </div>
    <!-- /form user info -->
</div>


