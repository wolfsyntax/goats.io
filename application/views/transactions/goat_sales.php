
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formUserEdit"></span>
    <hr class="my-3">

    <!-- form user info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Goat Sales</h3>
        </div>

        <div class="card-body">
            
            <?= form_open(); ?>
            
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label">Sale Date:</label>
                
                <div class="col-lg-9">
                    <input class="form-control" type="date" value="yyyy-mm-dd" id="example-date-input">
                </div>

            </div>
                               

            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label">EarTag ID:</label>

                <div class="col-lg-9">

                    <input class="form-control" type="text" placeholder="######" value="">

                </div>

            </div>
                                
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label">Buyer:</label>
                
                <div class="col-lg-9">
                
                    <input class="form-control" type="text" value="">
                
                </div>

            </div>

            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label">Weight:</label>
                
                <div class="col-lg-9">
                
                    <input class="form-control" type="email" placeholder="kls"value="">
                
                </div>

            </div>
                               
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label">Price:</label>
                
                <div class="col-lg-9">
                    
                    <div class="input-group">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#8369;</span>
                        </div>
                    
                        <input type="text" class="form-control" id="exampleAmount" placeholder="Amount">
                    
                    </div>
                    
                </div>

            </div>

            <div class="form-group row">
                    
                <label class="col-lg-2 col-form-label form-control-label">Description:</label>
                    
                <div class="col-lg-9">
                    
                    <textarea class="form-control" id="exampleMessage"></textarea>
                    
                </div>

            </div>

            <div class="form-group row">
            
                <label class="col-lg-2 col-form-label form-control-label"></label>
                    
                <div class="col-lg-9">
            
                    <input type="reset" class="btn btn-secondary" value="Cancel">
            
                    <input type="button" class="btn btn-primary" value="Save Changes">
            
                </div>
            
            </div>
            
            <?= form_close();?>

        </div>

    </div>

</div>



