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
			<div class="col-10">
				<div class="card">
					<div class="card-header bg-primary">
						<h4 class="card-title text-light" style="font-size:medium;">UPDATE PROFILE</h4>
					</div>
					<div class="card-body p-5">
						<form>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Email</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="email@example.com">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Phone</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="123456789">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-3 col-form-label">Address</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 mb-5 col-form-label">Profile Image</label>
								<div class="col-sm-8">
									<input type="file" class="form-control">
								</div>
							</div>
							<div class="form-group row justify-content-center">
								<div class="col-sm-4">
									<button class="btn btn-primary col-sm-12" type="submit">Submit form</button>
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