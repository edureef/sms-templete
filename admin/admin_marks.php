<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Admin Manage marks</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5 justify-content-center">
                            <div class="col-sm-3 col-xl-2">
                                <form>
                                    <select class="form-control form-control-sm mb-3">
                                        <option value="">Select A Exam</option>
                                        <option value="1">First term exam</option>
                                        <option value="2">Second term exam</option>
                                        <option value="3">Model test exam</option>
                                        <option value="4">Final exam</option>
                                    </select>
                            </div>
                            <div class="col-sm-3 col-xl-2">
                                <select class="form-control form-control-sm mb-3">
                                    <option selected>Select A Class</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-xl-2">
                                <select class="form-control form-control-sm mb-3">
                                    <option selected>Select Section</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-xl-2">
                                <select class="form-control form-control-sm mb-3">
                                    <option selected>Subject</option>
                                    <option>Math</option>
                                    <option>English</option>
                                    <option>Physics</option>
                                </select>

                            </div>
                            <div class="col-sm-2 col-xl-2">
                                <button type="submit" class="btn btn-sm btn-primary w-100">Filter</button>
                            </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Student name</th>
                                                <th scope="col">Mark</th>
                                                <th scope="col">Grade point</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Porter Gutmann</td>
                                                <td><input type="text" class="form-control form-control-sm"></td>
                                                <td>A+(5.0)</td>
                                                <td><input type="text" class="form-control form-control-sm"></td>
                                                <td><input type="button" value="Add Mark"></td>
                                            </tr>
                                            <tr>
                                                <td>Alessia Yost</td>
                                                <td><input type="text" class="form-control form-control-sm"></td>
                                                <td>A(4.0)</td>
                                                <td><input type="text" class="form-control form-control-sm"></td>
                                                <td><input type="button" value="Add Mark"></td>
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