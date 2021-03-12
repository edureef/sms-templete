<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Student Fee Manager</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">STUDENT FEE REPORT</h5>
					</div>
					<div class="card-body">
						<div class="table-responsive-sm">
							<table class="table table-striped">
								<thead>
									<tr style="background-color: #313a46; color: #ababab;">
										<th scope="col">Student Name</th>
										<th scope="col">Class</th>
										<th scope="col">Invoice Title</th>
										<th scope="col">Total Amount</th>
										<th scope="col">Paid Amount</th>
										<th scope="col">Status</th>
										<th scope="col">Creation Date</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">Cecil Leuschke</th>
										<td>One</td>
										<td>Final term exam</td>
										<td>1500</td>
										<td>1500</td>
										<td><span class="badge bg-success">Paid</span></td>
										<td>22/03/2021</td>
									</tr>
									<tr>
										<th scope="row">Cecil Leuschke</th>
										<td>One</td>
										<td>Final term exam</td>
										<td>1500</td>
										<td>1500</td>
										<td><span class="badge bg-warning">Unpaid</span></td>
										<td>22/03/2021</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php require 'footer.php'; ?>