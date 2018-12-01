<div class="container-fluid mt-2 mb-5 pb-5">
	<div class="row mb-5">
		<div class="col">
			<section class="">
				<div class="card">
					<div class="card-header">
						Manage Loss
					</div>
					<div class="card-body p-2">
						<?= form_open('',array('class'=>'form')); ?>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-1">Ear Tag ID <span class="text-danger">*</span></label>
								<div class="col">
									<select name="eartag_color" id="goat_id_select" class="form-control" placeholder="- Enter Ear Tag ID -" required="" value="">

                                    	<option value="1">1</option>           
                        			</select>

								</div>

							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-1">Caused of Loss<span class="text-danger font-weight-bold">*</span></label>
								<div class="col">
									<select name="" class="custom-select">
										<option>- Select a Cause -</option>
										<option value="Deceased">Deceased</option>
										<option value="Lost">Lost</option>
										<option value="Stolen">Stolen</option>
									</select>

								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-1">Date of Loss <span class="text-danger">*</span></label>
								<div class="col">
									<input type="date" name="loss_date" value="" placeholder="Date of Loss" class="form-control">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-1">Notes <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="description" value="" placeholder="" class="form-control">
								</div>
							</div>

							<div class="form-row p-1 float-right w-100">
								<span class="col clearfix"></span>
								<input type="submit" class="btn btn-success col-3" value="Submit Loss">

							</div>								
						<?= form_close();?>
					</div>
					<div class="card-footer">
						A
					</div>
				</div>
			</section>
			<section class="mt-5">&emsp;</section>
		</div>
	</div>
</div>