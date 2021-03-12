<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Syllabus</h1>

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<!-- <div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div> -->
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
								<div class="table-responsive-sm">
									<table id="example" class="table table-striped my-0">
										<thead>
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
		$('#example').DataTable();
	});
</script>