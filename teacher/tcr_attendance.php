<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Student Attendance</h5>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#attendanceModal" data-backdrop="static" data-keyboard="false" style="float: inline-end;">Take attendance</button>

                        <!-- Modal -->
                        <div class="modal fade" id="attendanceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="takeAttendanceModel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="takeAttendanceModel">Take attendance</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label for="">Date</label>
                                                        <input type="date" class="form-control mt-2" name="" id="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="">Class</label>
                                                        <select class="mt-2 form-control" name="" id="">
                                                            <option value="">One</option>
                                                            <option value="">Two</option>
                                                            <option value="">Three</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="">Section</label>
                                                        <select class="mt-2 form-control" name="" id="">
                                                            <option value="">A</option>
                                                            <option value="">B</option>
                                                            <option value="">C</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for=""></label>
                                                        <input class="mt-2 form-control" type="button" value="Show Students List" style="background-color: bisque;border-radius: 21px;font-weight: bold;">
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="row mt-5 justify-content-center">
                                                <div class="col-8">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <th>Student Name</th>
                                                            <th>Status</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Romel</td>
                                                                <td>
                                                                    <div class="form-check-inline">
                                                                        <input class="form-check-input" type="radio" value="1" name="Romel">
                                                                        <label class="form-check-label">
                                                                            Present
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <input class="form-check-input" type="radio" value="0" name="Romel">
                                                                        <label class="form-check-label">
                                                                            Absent
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bugrazz</td>
                                                                <td>
                                                                    <div class="form-check-inline">
                                                                        <input class="form-check-input" type="radio" value="1" name="Bugrazz">
                                                                        <label class="form-check-label">
                                                                            Present
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                        <input class="form-check-input" type="radio" value="0" name="Bugrazz">
                                                                        <label class="form-check-label">
                                                                            Absent
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Update Attendance</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Model -->
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
                                <div class="table-responsive-sm">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">
                                                    <i class="align-middle" data-feather="arrow-down"></i> <span class="align-middle">Name</span> |
                                                    <span class="align-middle">Date</span><i class="align-middle" data-feather="arrow-right"></i>
                                                </th>
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