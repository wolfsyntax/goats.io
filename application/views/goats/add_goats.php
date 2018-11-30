<?php //$this->load->view('includes/user_header'); ?>
<div class="col-md-8 offset-md-2 mt-1">
    <span class="anchor" id="formUserEdit"></span>
    <hr class="my-3">

        <!-- form user info -->
    <div class="card card-outline-secondary mb-5" style="height: 100vh;">
        <div class="card-header">
            <h3 class="mb-0">Add Goat</h3>
        </div>
            
        <div class="card-body">
        <!--form class="form" role="form" autocomplete="off"-->
        <?= form_open('', array('class'=> 'form mb-5')); ?>
            <div class="form-group row">
                <?= ($this->session->flashdata('goat') ? $this->session->flashdata('goat') : ''); ?>
                
            </div>
            <div class="form-group row">

                <label class="col-lg-2 col-form-label form-control-label">EarTag ID:</label>
                        
                <div class="col-lg-9">
                    <div class="row">
                        <input class="form-control" type="text" value="<?= set_value('eartag_id'); ?>" name="eartag_id" placeholder="Ear Tag ID">
                    </div>

                    <div class="row mt-2">
                        <?= (form_error('eartag_id')  != "" ? form_error('eartag_id') : ''); ?>
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
                        <?= (form_error('tag_color')  != "" ? form_error('tag_color') : ''); ?>
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
                        <?= (form_error('body_color')  != "" ? form_error('body_color') : ''); ?>
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
                        <?= (form_error('birth_date')  != "" ? form_error('birth_date') : ''); ?>
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
                        <select name="sire_id" id="sire_id_select" class="form-control" placeholder="Enter or Choose Tag Number" required="" value="<?= set_value('sire_id');?>">

                        <?php foreach($sire_record as $row) {?>
                            <option value="<?= $row->eartag_id; ?>"><?= $row->eartag_id; ?></option>
                        <?php }?>
                        </select>
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
                        <select name="dam_id" id="dam_id_select" class="form-control" placeholder="Enter or Choose Tag Number" required="" value="<?= set_value('dam_id');?>">

                        <?php foreach($dam_record as $row) {?>
                            <option value="<?= $row->eartag_id; ?>"><?= $row->eartag_id; ?></option>
                        <?php }?>
                        </select>
                    </div>
                    <div class="row mt-2">
                        <?= (form_error('dam_id')  != "" ? form_error('dam_id') : ''); ?>
                    </div>
                </div>

            </div>
            <div class="form-row mb-1">
                <div class="col-2">
                    <label>Is castrated?</label>
                </div>
                <div class="col-10">
                    &emsp;<input type="checkbox" name="" value="" class="form-check-input">
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
        <div class="card-footer mt-5 cleafix">&emsp;</div>
    </div>
    <!-- /form user info -->
</div>


