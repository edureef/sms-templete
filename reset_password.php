<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Manage Profile</h1>

		<div class="row justify-content-center">
			<div class="col-10">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">CHANGE PASSWORD</h5>
					</div>
					<div class="card-body p-5">
						<form>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Current Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">New Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Confirm Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" placeholder="">
								</div>
							</div>
							<div class="form-group row justify-content-center">
								<div class="col-sm-4">
									<button class="btn btn-primary col-sm-12" type="submit">Change Password</button>
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