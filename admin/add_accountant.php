<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Accountant</h5>
                    </div>
                    <div class="col-sm-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-outline-info float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: inline-end;">
                            Add accountant
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Create accountant</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="inputName">
                                                <div class="form-text">Provide accountant name.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputEmail" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="inputEmail">
                                                <div class="form-text">Provide accountant email.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPhone" class="form-label">Phone number</label>
                                                <input type="number" class="form-control" id="inputPhone">
                                                <div class="form-text">Provide accountant phone number.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Gender</label>
                                                <select class="form-select">
                                                    <option selected>Select a gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" id="" rows="3"></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label">Upload image</label>
                                                <input type="file" class="form-control" id="image_file" name="image_file">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary w-100">Create accountant</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-bordered pt-3 pb-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col" class="text-center">Action</th>
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
                                    <td>Block 21, Tuen Hip Keng Court Yiu Shong Yuet Hong Kong</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <div class="text-center">
                                            <img alt="Charles Hall" src="../img/avatars/avatar-2.jpg" class="rounded-circle img-responsive mt-2" width="50" height="50">
                                        </div>
                                    </td>
                                    <td>Charles Kall</td>
                                    <td>Charles@gmail.com</td>
                                    <td>+888522412526</td>
                                    <td>87 Hai Chit Tsan Pun New Territories</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <div class="text-center">
                                            <img alt="Charles Hall" src="../img/avatars/avatar-3.jpg" class="rounded-circle img-responsive mt-2" width="50" height="50">
                                        </div>
                                    </td>
                                    <td>Charles Mall</td>
                                    <td>Charles@gmail.com</td>
                                    <td>+888522412526</td>
                                    <td>69 Teu Ang Street Sei She Hong Kong</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                    <!-- Edit Model -->
                                    <div class="modal fade" id="staticBackdropEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label">Update Accountant</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="mb-3">
                                                            <label for="inputName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="inputName">
                                                            <div class="form-text">Provide accountant name.</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputEmail" class="form-label">Email address</label>
                                                            <input type="email" class="form-control" id="inputEmail">
                                                            <div class="form-text">Provide accountant email.</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputPassword" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputPhone" class="form-label">Phone number</label>
                                                            <input type="number" class="form-control" id="inputPhone">
                                                            <div class="form-text">Provide accountant phone number.</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Gender</label>
                                                            <select class="form-select">
                                                                <option selected>Select a gender</option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Address</label>
                                                            <textarea class="form-control" id="" rows="3"></textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Upload image</label>
                                                            <input type="file" class="form-control" id="image_file" name="image_file">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-primary w-100">Update Accountant</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit Model -->
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
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false,
        });
    });
</script>