<html>
	<head>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
<body>
<div class="col-md-8 offset-md-2">
    <span class="anchor" id="formUserEdit"></span>
    <hr class="my-3">

    <!-- form user info -->
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0"><i class="fas fa-coins">&nbsp;</i>Goat Sales</h3>
        </div>

        <div class="card-body">
            
        <form>
            
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Sale Date</label>
                
                <div class="col-lg-6">
                    <input class="form-control" type="date" value="yyyy-mm-dd" id="example-date-input">
                </div>

            </div>
                               

            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">EarTag ID</label>

                <div class="col-lg-6">

                    <input class="form-control" type="text" placeholder=" " value="">

                </div>

            </div>
                                
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Buyer</label>
                
                <div class="col-lg-6">
                
                    <input class="form-control" type="text" value="">
                
                </div>

            </div>

            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Weight</label>
                
                <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" type="email" placeholder="" value="">
                        <div class="input-group-append">
                                <span class="input-group-text">kls</span>
                        </div>
                    </div>
                </div>
            </div>
                               
            <div class="form-group row">
                
                <label class="col-lg-2 col-form-label form-control-label" style="margin-left:130px;">Price</label>
                
                <div class="col-lg-6">
                    
                    <div class="input-group">
                    
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#8369;</span>
                        </div>
                    
                        <input type="text" class="form-control" id="exampleAmount" placeholder="Amount">
                    
                    </div>
                    
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
                    
                <div class="col-lg-6">
            
                    <input type="button" style="margin-left:145px;" class="btn btn-primary" value="Add Sale">
            
                </div>
            
            </div>
            
            </form>

        </div>

    </div>

</div>

</body>
</html>

