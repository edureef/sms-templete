<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">
	<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<h5 class="mb-3">Manage Profile</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-10 col-xl-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">CHANGE PASSWORD</h5>
					</div>
					<div class="card-body p-5">
						<form>
							<div class="form-group row">
								<label class="col-sm-6 col-form-label">Current Password</label>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-sm" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-6 col-form-label">New Password</label>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-sm" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-6 col-form-label">Confirm Password</label>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-sm" placeholder="">
								</div>
							</div>
							<div class="form-group mt-4 row justify-content-center">
								<div class="col-sm-12">
									<button class="btn btn-sm btn-primary col-sm-12" type="submit">Change Password</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php require 'footer.php'; ?>