<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdl-insert-update" aria-hidden="true" id="mdl-insert-update">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title"><span id="title-modal">  </span></h4>
					<form class="forms-sample" id="frm-insert" action="" method="">
						@csrf
						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Name</label>
							<div class="col-sm-9 input-wrapper">
								<input type="text" class="form-control" id="name" name="name" placeholder="Major Name">
							</div>
						</div>
						<div class="form-group row">
							<label for="type" class="col-sm-3 col-form-label">For</label>
							<div class="col-sm-9 input-wrapper">
								<select class="form-control" name="type" id="type" style="width: 100%; height: auto;">
									<option value="1">SMA / SMK</option>
									<option value="2">D3 / S1 /S2</option>
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