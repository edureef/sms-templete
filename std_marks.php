<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Manage Marks</h1>

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<!-- <div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div> -->
					<div class="card-body">
						<div class="row mb-5 justify-content-center">
							<div class="col-sm-2">
								<form>
									<select class="form-control mb-3">
										<option value="">Select A Exam</option>
										<option value="1">First term exam</option>
										<option value="2">Second term exam</option>
										<option value="3">Model test exam</option>
										<option value="4">Final exam</option>
									</select>
								</form>
							</div>
							<div class="col-sm-2">
								<form>
									<select class="form-control mb-3">
										<option selected>Select A Class</option>
										<option>One</option>
										<option>Two</option>
										<option>Three</option>
									</select>
								</form>
							</div>
							<div class="col-sm-2">
								<form>
									<select class="form-control mb-3">
										<option selected>Select Section</option>
										<option>A</option>
										<option>B</option>
										<option>C</option>
									</select>
								</form>
							</div>
							<div class="col-sm-2">
								<button type="submit" class="btn btn-primary col-sm-12">Filter</button>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-sm-8">
								<div class="table-responsive-sm">
									<table class="table table-striped">
										<thead>
											<tr style="background-color: #313a46; color: #ababab;">
												<th>Subject Name</th>
												<th>Marks</th>
												<th>Comment</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>English</th>
												<th>70%</th>
												<th>GOOD</th>
											</tr>
											<tr>
												<th>Mathematics</th>
												<th>80%</th>
												<th>GOOD</th>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php require 'footer.php'; ?>