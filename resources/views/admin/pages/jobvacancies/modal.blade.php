<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdl-insert-update" aria-hidden="true" id="mdl-insert-update">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title"><span id="title-modal">  </span></h4>
					<form class="forms-sample" id="frm-insert" action="" method="">
						@csrf
						<div class="form-group row">
							<label for="position_id" class="col-sm-3 col-form-label">Position</label>
							<div class="col-sm-9 input-wrapper">
								<select class="position-ajax form-control" id="position_id" name="position_id" style="width: 100%; height: auto;">
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="educationlevel_id" class="col-sm-3 col-form-label">Education Level</label>
							<div class="col-sm-9 input-wrapper">
								<select class="educationlevel-ajax form-control" id="education_level_id" name="education_level_id" style="width: 100%; height: auto;">
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="open_date" class="col-sm-3 col-form-label">Open Date</label>
							<div class="col-sm-9 input-wrapper date" >
							    <input type="text" class="datepicker form-control" data-date-container='#mdl-insert-update' id="open_date" name="open_date" placeholder="Open Date">
							</div>
						</div>
						<div class="form-group row">
							<label for="close_date" class="col-sm-3 col-form-label">Close Date</label>
							<div class="col-sm-9 input-wrapper">
								<input type="text" class="datepicker form-control" ddata-date-container='#mdl-insert-update' id="close_date" name="close_date" placeholder="Close Date">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Gender</label>
							<div class="col-sm-9 input-wrapper">
								<select class="form-control standard" name="gender" style="width: 100%;">
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">Male / Female</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="min_gpa" class="col-sm-3 col-form-label">Min GPA</label>
							<div class="col-sm-9 input-wrapper">
								<input type="text" class="form-control" id="min_gpa" name="min_gpa" placeholder="Min GPA">
							</div>
						</div>
						<div class="form-group row">
							<label for="descriptions" class="col-sm-3 col-form-label">Descriptions</label>
							<div class="col-sm-9 input-wrapper">
								<textarea class="summernote" id="descriptions" name="descriptions"> </textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="requirements" class="col-sm-3 col-form-label">Requirements</label>
							<div class="col-sm-9 input-wrapper">
								<textarea class="summernote" id="requirements" name="requirements"> </textarea>
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