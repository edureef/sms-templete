<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<h5 class="mb-3">Class Routine</h5>
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
							<div class="col-sm-3">
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
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl">
									<table class="table table-bordered">
										<thead>
											<tr style="background-color: darkgrey;color: black;">
												<th scope="col">Class Time</th>
												<th scope="col">7pm - 8pm</th>
												<th scope="col">8pm - 9pm</th>
												<th scope="col">9pm - 10pm</th>
												<th scope="col">10pm - 11pm</th>
												<th scope="col">11pm - 12pm</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Saturday</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Sunday</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Monday</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Tuesday</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Wednesday</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<th scope="row">Thursday</th>
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