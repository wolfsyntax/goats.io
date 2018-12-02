<div class="container-fluid p-2">
	<div class="row">
		<div class="col">
			<section class="">
				<div class="card">
					<div class="card-header">
						Add Goat Sales
					</div>
					
					<div class="card-body p-2">
						<?= form_open('',array('class'=>'form','style'=>''));?>
							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Date Sold <span class="text-danger">*</span></label>
								<div class="col">
									<input type="date" name="buyer" value="" placeholder="" class="form-control ">

								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Sold Through <span class="text-danger">*</span></label>
								<div class="col">
									<select name="body_color" id="client_select" class="form-control" placeholder="- Select Buyer -" required="" value="">

                                    	<option value="MGM">MGM</option>           
                        			</select>

								</div>

							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Total Weight <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="weight" value="" placeholder="Enter weight in lbs" class="form-control ">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Total Amount <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="amount" value="" placeholder="" class="form-control ">
								</div>
							</div>


							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Description <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="description" value="" placeholder="notes / additional information" class="form-control ">
								</div>
							</div>

							<div class="form-row p-1 float-right w-100">
								<span class="col clearfix"></span>
								<input type="submit" class="btn btn-info col-3" value="Add Sale">
							</div>


							<div class="form-row p-1 float-right w-100">
								&emsp;
							</div>																							
						<?= form_close();?>
					</div>

					<div class="card-footer">
						A
					</div>
				</div>
			</section>
			<section></section>
		</div>
	</div>
</div>
