<div class="container-fluid p-2">
	<div class="row">
		<div class="col">
			<div class="card p-1">
				<div class="card-header">
					Expenses
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							Transaction <strong>Total</strong>: P0.00
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="row mt-2">
		<div class="col">
			<div class="card p-1">
				<div class="card-header">
					<span class=""></span>Add New Expense
				</div>
				<?= form_open('',array('class'=>'p-1')); ?>
					<div class="form-row">
						<div class="col-12 form-group">
							<input type="text" name="">
						</div>
					</div>
				<?= form_close();?>

			</div>
		</div>
	</div>
</div>