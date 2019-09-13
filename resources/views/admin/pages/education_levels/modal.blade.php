<!--Modal Insert-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdl-insert-update" aria-hidden="true" id="mdl-insert-update">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title"><span id="title-modal">  </span></h4>
					<form class="forms-sample" id="frm-insert" action="" method="">
						@csrf
						<div class="form-group row">
							<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name Education Level</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name Education Level">
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Form Type</label>
							<div class="col-sm-9 input-wrapper">
								<select class="form-control" id="form_type" name="form_type" style="width: 100%; height: auto;">
									<option value="1"> Form 1 (SMA/SMK)</option>
									<option value="2"> Form 2 (D3/S1)</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Gender</label>
							<div class="col-sm-9 input-wrapper">
								<select class="form-control" name="gender" style="width: 100%;">
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">Transgender</option>
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-white-text" id="add-new-btn">Submit</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					</form>
				</div>
			</div>
    	</div>
	</div>
</div>
<!--Modal Insert-->