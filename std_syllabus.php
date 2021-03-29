<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<div class="card">
			<div class="row card-body">
				<div class="col-sm-6">
					<h5>Syllabus</h5>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row mb-5 justify-content-center">
							<div class="col-sm-4 col-xl-3">
								<form>
									<select class="form-control form-control-sm mb-3">
										<option selected>Select A Class</option>
										<option>One</option>
										<option>Two</option>
										<option>Three</option>
									</select>
								</form>
							</div>
							<div class="col-sm-4 col-xl-3">
								<form>
									<select class="form-control form-control-sm mb-3">
										<option selected>Select Section</option>
										<option>A</option>
										<option>B</option>
										<option>C</option>
									</select>
								</form>
							</div>
							<div class="col-sm-4 col-xl-3">
								<button type="submit" class="btn btn-sm btn-primary col-sm-12">Filter</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
									<table id="example" class="table table-striped py-2">
										<thead style="background-color: #566079;color: aliceblue;">
											<tr>
												<th>Title</th>
												<th>Syllabus</th>
												<th>Subject</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Final Syllabus</td>
												<td><button class="btn btn-sm btn-info">Download File</button></td>
												<td>Computer</td>
											</tr>
											<tr>
												<td>First Term Syllabus</td>
												<td><button class="btn btn-sm btn-info">Download File</button></td>
												<td>English</td>
											</tr>
											<tr>
												<td>First Term Syllabus</td>
												<td><button class="btn btn-sm btn-info">Download File</button></td>
												<td>Mathematics</td>
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

<script>
	$(document).ready(function() {
		$('#example').DataTable({
			"ordering": false,
		});
	});
</script>