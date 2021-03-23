<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="row card-body">
                <div class="col-sm-6">
                    <h5>Assignment</h5>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#assignmentModel" data-backdrop="static" data-keyboard="false" style="float: inline-end;">Add Assignment</button>

                    <div class="modal fade" id="assignmentModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="assignmentModelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assignmentModelLabel">Create assignment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" aria-describedby="title">
                                            <div id="title" class="form-text">Provide assignment title.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Class</label>
                                            <select class="form-select">
                                                <option selected>Choose A Class</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Section</label>
                                            <select class="form-select">
                                                <option selected>Choose A Section</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <select class="form-select">
                                                <option selected>Choose A Subject</option>
                                                <option value="1">Math</option>
                                                <option value="2">Physics</option>
                                                <option value="3">English</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Deadline</label>
                                            <input type="date" class="form-control" name="" id="">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer mx-auto col-10">
                                    <button type="button" class="btn btn-sm btn-primary w-100">Add Assignment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row mb-5 justify-content-center">
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
                        <form>
                            <select class="form-control mb-3">
                                <option selected>Select Subject</option>
                                <option>English</option>
                                <option>Physics</option>
                                <option>Math</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary col-sm-12">Filter</button>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-10">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <th>Title</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Deadline</th>
                                <th>Submissions</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Refraction of Light and Our Eyes</td>
                                    <td>Class : Class One <br>
                                        Section : A</td>
                                    <td>Physics</td>
                                    <td>24 Jan 2027</td>
                                    <td>1 Students</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="p-1 btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="border: 1px solid #222121;border-radius: 20px;">
                                                <i class="align-middle" data-feather="more-vertical" style="margin-left: 16px;"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <li><a class="dropdown-item" href="#">Questions</a></li>
                                                <li><a class="dropdown-item" href="#">Submissions</a></li>
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'footer.php'; ?>