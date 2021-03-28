<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<h5 class="mb-3">Subject</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row mb-5 justify-content-center">
							<div class="col-sm-3">
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
								<button type="submit" class="btn btn-primary col-sm-12">Filter</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl">
									<table class="table table-striped">
										<thead>
											<tr style="background-color: #313a46; color: #ababab;">
												<th scope="col">Subject Name</th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">English</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Mathematics</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Biology</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Computer</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Physical Education</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Chemistry</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
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