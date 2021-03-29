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
			<div class="col-8">
				<div class="card">
					<div class="card-header bg-primary">
						<h6 class="fs-6 text-light">UPDATE PROFILE</h6>
					</div>
					<div class="card-body p-5">
						<form method="POST" action="">
							<div class="form-group row">
								<label class="col-sm-4 mb-2 col-form-label">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-sm" placeholder="Enter your name">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-2 col-form-label">Email</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-sm" placeholder="email@example.com">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-2 col-form-label">Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-sm" placeholder="123456789">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-2 col-form-label">Address</label>
								<div class="col-sm-8">
									<input type="text" class="form-control form-control-sm" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-2 col-form-label">Profile Image</label>
								<div class="col-sm-8">
									<input type="file" class="form-control form-control-sm">
								</div>
							</div>
							<div class="form-group">
								<div class="mt-2">
									<button class="btn btn-sm btn-primary float-end" type="submit">Submit form</button>
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