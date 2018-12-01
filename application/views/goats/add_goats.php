<div class="container-fluid mt-2 mb-5">
	<div class="row">
		<div class="col">
			<section class="">
				<div class="card">
					<div class="card-header">
						Add Goats
					</div>
					<div class="card-body p-2">
						<?= form_open('',array('class'=>'form')); ?>
							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Ear Tag ID <span class="text-danger">*</span></label>								
								<div class="col">
									<input type="text" name="eartag_id" placeholder="Tag ID"  class="form-control" />
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Gender <span class="text-danger">*</span></label>
								<div class="col">
									<select name="" class="custom-select">
										<option>- Select a Gender -</option>
										<option value="female">Female</option>
										<option value="male">Male</option>
									</select>

								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Body Color <span class="text-danger">*</span></label>
								<div class="col">
									<select name="body_color" id="body_color_select" class="form-control" placeholder="- Enter Body Color -" required="" value="">

                                    	<option value="Brown">Brown</option>           
                        			</select>

								</div>

							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Birth Date <span class="text-danger">*</span></label>
								<div class="col">
									<input type="date" name="birth_date" value="" placeholder="Date of Birth" class="form-control">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Birth Weight <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="birth_weight" value="" placeholder="Enter weight in lbs." class="form-control">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Dam ID <span class="text-danger">*</span></label>
								<div class="col">
									<select name="dam_id" id="dam_id_select" class="form-control" placeholder="- Enter Dam ID -" required="" value="">

                                    	<option value="1">1</option>           
                        			</select>

								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Sire ID <span class="text-danger">*</span></label>
								<div class="col">
									<select name="sire_id" id="sire_id_select" class="form-control" placeholder="- Enter Sire ID -" required="" value="">

                                    	<option value="1">1</option>           
                        			</select>

								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Purchase Date <span class="text-danger">*</span></label>
								<div class="col">
									<input type="date" name="purchase_date" value="" placeholder="Date of Purchased" class="form-control">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Purchase From <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="purchase_from" value="" placeholder="Purchase From" class="form-control">
								</div>
							</div>

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Purchase Price <span class="text-danger">*</span></label>
								<div class="col">
									<input type="number" name="purchase_from" value="" min="0" placeholder="- Enter vendor name -" class="form-control">
								</div>
							</div>							


							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Purchase Weight <span class="text-danger">*</span></label>
								<div class="col">
									<input type="text" name="purchase_weight" value="" placeholder="- Enter weight in lbs. -" class="form-control">
								</div>
							</div>							

							<div class="form-row p-1">
								<label class="col-form-label-sm col-3 col-sm-3 col-md-2 col-lg-2">Is castrated ? <span class="text-danger">*</span></label>
								<div class="col">
									<input type="checkbox" name="is_castrated" value="" class="custom-checkbox">
								</div>
							</div>

							<div class="form-row p-1 float-right w-100">
								<span class="col clearfix"></span>
								<input type="submit" class="btn btn-success col-3" value="Add Goat">

							</div>							
						<?= form_close();?>
					</div>
					<div class="card-footer">
						A
					</div>
				</div>
			</section>
			<section class="mt-5 clearfix"></section>
		</div>
	</div>
</div>