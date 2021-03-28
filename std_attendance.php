<?php require 'header.php' ?>

<main class="content">
	<div class="container-fluid p-0">

		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<h5 class="mb-3">Daily Attendance</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row mb-5 justify-content-center">
							<div class="col-sm-2">
								<form>
									<select class="form-control mb-3">
										<option value="">Select A Month</option>
										<option value="Jan">January</option>
										<option value="Feb">February</option>
										<option value="Mar">March</option>
										<option value="Apr">April</option>
										<option value="May">May</option>
										<option value="Jun">Junij</option>
										<option value="Jul">July</option>
										<option value="Aug">August</option>
										<option value="Sep">September</option>
										<option value="Oct">October</option>
										<option value="Nov">November</option>
										<option value="Dec">December</option>
									</select>
								</form>
							</div>
							<div class="col-sm-2">
								<form>
									<select class="form-control mb-3">
										<option selected>Select Year</option>
										<option>2021</option>
										<option>2020</option>
										<option>2019</option>
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
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl">
									<table class="table table-bordered">
										<thead class="thead-dark">
											<tr>
												<th scope="col">Student Date</th>
												<th scope="col">1</th>
												<th scope="col">2</th>
												<th scope="col">3</th>
												<th scope="col">4</th>
												<th scope="col">5</th>
												<th scope="col">6</th>
												<th scope="col">7</th>
												<th scope="col">8</th>
												<th scope="col">9</th>
												<th scope="col">10</th>
												<th scope="col">11</th>
												<th scope="col">12</th>
												<th scope="col">13</th>
												<th scope="col">14</th>
												<th scope="col">15</th>
												<th scope="col">16</th>
												<th scope="col">17</th>
												<th scope="col">18</th>
												<th scope="col">19</th>
												<th scope="col">20</th>
												<th scope="col">21</th>
												<th scope="col">22</th>
												<th scope="col">23</th>
												<th scope="col">24</th>
												<th scope="col">25</th>
												<th scope="col">26</th>
												<th scope="col">27</th>
												<th scope="col">28</th>
												<th scope="col">29</th>
												<th scope="col">30</th>
												<th scope="col">31</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Student Name</th>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
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