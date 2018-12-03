
  <section class="mt-5">
 
    <div class="col-md-8 offset-md-2">
      <span class="anchor" id="formUserEdit"></span>
      <hr class="my-4">
        
      <!-- form user info -->
      <div class="card card-outline-secondary">
        <div class="card-header">
          <h3 class="mb-0"><i class="fas fa-transgender"></i>&nbsp;</i>Breeding</h3>
        </div>
        
        <div class="card-body" >
          <?= form_open(base_url().'breed/verify', array('class'=> 'form')); ?>
          <div class="form-group row"> 
            <?= ($this->session->flashdata('goat') ? $this->session->flashdata('goat') : ''); ?>
          </div>

          <div class="form-group row"> 
            <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Dam ID</label>                           
              
            <div class="col-lg-6">
              <!-- Populate Dam ID using set_value -->
              <!--input class="form-control" type="text" value="<?= set_value('dam_id');?>" name="dam_id" placeholder="Dam ID"-->

              <select name="dam_id" id="dam_id_select" class="form-control" placeholder="Enter or Choose Tag Number" required="" value="<?= set_value('dam_id');?>">

                  <?php foreach($dam_record as $row) {?>
                    <option value="<?= $row->eartag_id; ?>"><?= $row->eartag_id; ?></option>
                  <?php }?>
              </select>
            </div>
          </div>

          <div class="form-group row"> 
            <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Sire ID</label>                           
              
            <div class="col-lg-6">
              <!--input class="form-control" type="text" value="<?= set_value('sire_id');?>" name="sire_id" placeholder="Sire ID" !-->

                <select name="sire_id" id="sire_id_select" class="form-control" placeholder="Enter or Choose Tag Number" required="" value="<?= set_value('sire_id');?>">
                  <?php foreach($sire_record as $row) {?>
                    <option value="<?= $row->eartag_id; ?>"><?= $row->eartag_id; ?></option>
                  <?php }?>
              </select>
            </div>
          </div>
          <?php

            foreach($test as $row){
                    
                $client_id = $row->eartag_id;
                    
              }

           ?>              
          <div class="form-group row">  
            <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Breeding Date</label>    
              
            <div class="col-lg-6">
              <input class="form-control" type="date" value="<?= set_value('breed_date');?>" id="" placeholder="yyyy-mm-dd" name="breed_date">
            </div>
          </div>

          <div class="form-group row">
                        
            <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Description:</label>
                                                    
            <div class="col-lg-6">
              <textarea class="form-control" id="" placeholder="Description" name="description"><?= set_value('description'); ?></textarea>
       
            </div>

          </div>

          <div class="form-group row">
              
            <label class="form-control-label" style="margin-left:130px;"></label>
              
            <div class="col-lg-9 mt-2">
              <input type="submit" style="margin-left:145px;" class="btn btn-primary col-8" value="Add Breeding">
            </div>

          </div>
                                     
        <?= form_close();?>
        </div>
      </div>
    </div>





  </section>  

