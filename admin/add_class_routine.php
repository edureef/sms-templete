<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Class routine</h5>
                    </div>
                    <div class="col-sm-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-info mr-4" data-bs-toggle="modal" data-bs-target="#staticBackdropRoutine" style="float: inline-end;">
                            Add Class Routine
                        </button>

                        <!-- routine Modal -->
                        <div class="modal fade" id="staticBackdropRoutine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Create routine</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label class="form-label">Class</label>
                                                <select class="form-select">
                                                  <option selected>Select a class</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Section</label>
                                                <select class="form-select">
                                                  <option selected>Select Section</option>
                                                  <option value="1">A</option>
                                                  <option value="2">B</option>
                                                  <option value="3">C</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <select class="form-select">
                                                  <option selected>Select Subject</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Teacher</label>
                                                <select class="form-select">
                                                  <option selected>Assign a teacher</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Class Room</label>
                                                <select class="form-select">
                                                  <option selected>Select a class room</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Day</label>
                                                <select class="form-select">
                                                  <option selected>Select a day</option>
                                                  <option value="1">Sunday</option>
                                                  <option value="2">Monday</option>
                                                  <option value="3">Tuesday</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Starting hour</label>
                                                <select class="form-select">
                                                  <option selected>Starting hour</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Starting minute</label>
                                                <select class="form-select">
                                                  <option selected>Starting minute</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ending hour</label>
                                                <select class="form-select">
                                                  <option selected>Ending hour</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ending minute</label>
                                                <select class="form-select">
                                                  <option selected>Ending minute</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary w-100">Add class routine</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <div class="table-responsive-sm">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
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