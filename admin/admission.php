<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Student admission form</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row mb-3">
                                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="inputName3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control form-control-sm" id="inputPassword3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm">
                                        <option selected>Select a class</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Section</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm">
                                        <option selected>Select Section</option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputBirthDate3" class="col-sm-2 col-form-label">Birthday</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" id="inputBirthDate3">
                                </div>
                            </div>
                            <fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="" id="" name="gender">
                                            <label class="form-check-label" for="">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="" id="" name="gender">
                                            <label class="form-check-label" for="">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="inputName3" class="col-sm-2 col-form-label">Blood group</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-sm">
                                        <option selected>Select Blood group</option>
                                        <option value="1">A+</option>
                                        <option value="1">A-</option>
                                        <option value="2">B+</option>
                                        <option value="2">AB+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <div class="mb-3">
                                        <label class="form-label"></label>
                                        <textarea class="form-control form-control-sm" id="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhone3" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control form-control-sm" id="inputPhone3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputImage3" class="col-sm-4 col-form-label">Student profile image</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control form-control-sm" id="inputImage3">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="mt-3 btn btn-sm btn-primary col-sm-8">Add Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <select class="form-select form-select-sm">
                                    <option selected>Select a class</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-select form-select-sm">
                                    <option selected>Select Section</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-sm btn-success w-100">Filter</button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-12">
                                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">

                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <div class="text-center">
                                                        <img alt="Charles Hall" src="../img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td>Charles Hall</td>
                                                <td>Charles@gmail.com</td>
                                                <td>+888522412526</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <div class="text-center">
                                                        <img alt="Charles Hall" src="../img/avatars/avatar-2.jpg" class="rounded-circle img-responsive mt-2" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td>Charles Hall</td>
                                                <td>Charles@gmail.com</td>
                                                <td>+888522412526</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <div class="text-center">
                                                        <img alt="Charles Hall" src="../img/avatars/avatar-3.jpg" class="rounded-circle img-responsive mt-2" width="50" height="50">
                                                    </div>
                                                </td>
                                                <td>Charles Hall</td>
                                                <td>Charles@gmail.com</td>
                                                <td>+888522412526</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
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
</main>

<?php require 'footer.php'; ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false,
        });
    });
</script>