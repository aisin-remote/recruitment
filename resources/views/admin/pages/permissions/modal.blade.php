Modal Insert-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mdl-insert-update" aria-hidden="true" id="mdl-insert-update">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title"><span id="title-modal">  </span></h4>
					<form class="forms-sample" id="frm-insert" action="" method="">
						@csrf
						<div class="form-group row">
							<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name Permission</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name Permission">
							</div>
						</div>
						<div class="form-group row">
							<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Display Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="display_name" name="display_name" placeholder="Display Name Permission">
							</div>
						</div>
						<div class="form-group row">
							<label for="exampleInputGuard2" class="col-sm-3 col-form-label">Guard Name</label>
							<div class="col-sm-9">
								<select class="form-control " id="guard_name" name="guard_name">
									<option value="web" >Web</option>
									<option value="api" >Api</option>
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
<!--Modal Insert