<div class="col-md-8 offset-md-2">
  <span class="anchor" id="formUserEdit"></span>
  <hr class="my-4">
    
  <!-- form user info -->
  <div class="card card-outline-secondary">
    <div class="card-header">
      <h3 class="mb-0"><i class="fas fa-transgender"></i>&nbsp;</i>Breeding</h3>
    </div>
    
    <div class="card-body" >
      <?= form_open('', array('autocomplete'=">off", 'class'=> 'form')); ?>

      <div class="form-group row"> 
        <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Dam ID</label>                           
          
        <div class="col-lg-6">
          <input class="form-control" type="text" value="" >
        </div>
      </div>

      <div class="form-group row"> 
        <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Sire ID</label>                           
          
        <div class="col-lg-6">
          <input class="form-control" type="text" value="" >
        </div>
      </div>
                                    
      <div class="form-group row">  
        <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Breeding Date</label>    
          
        <div class="col-lg-6">
          <input class="form-control" type="date" value="yyyy-mm-dd" id="example-date-input">
        </div>
      </div>

      <div class="form-group row">
                    
        <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Description:</label>
                                                
        <div class="col-lg-6">
          <textarea class="form-control" id="exampleMessage"></textarea>
        </div>

      </div>

      <div class="form-group row">
          
        <label class="form-control-label" style="margin-left:130px;"></label>
          
        <div class="col-lg-9 mt-2">
          <input type="button" style="margin-left:145px;" class="btn btn-primary" value="Add Breeding">
        </div>

      </div>
                                 
    <?= form_close();?>
    </div>
  </div>
</div>
