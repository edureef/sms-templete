<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Class</h5>
                    </div>
                    <div class="col-sm-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-outline-info float-end mr-4" data-bs-toggle="modal" data-bs-target="#staticBackdropSection" style="float: inline-end;">
                            Add Section
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-info float-end" data-bs-toggle="modal" data-bs-target="#staticBackdropClass" style="float: inline-end; margin-right:3ex;">
                            Add Class
                        </button>

                        <!-- Section Modal -->
                        <div class="modal fade" id="staticBackdropSection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Create Section</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label">Class</label>
                                                <select class="form-select">
                                                    <option selected>select a Class</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputSection" class="form-label">Section</label>
                                                <input type="text" class="form-control" id="inputSection">
                                                <div class="form-text">Provide section name.</div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary w-100">Create Section</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Class Modal -->
                        <div class="modal fade" id="staticBackdropClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Create Class</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="inputName">
                                                <div class="form-text">Provide class name.</div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary w-100">Create Class</button>
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
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                            <table id="example" class="table table-bordered pt-3 pb-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Section</th>
                                        <th class="text-center">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Class One</td>
                                        <td>
                                            <ul>
                                                <li>A</li>
                                                <li>B</li>
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdropEditClass"><i class="fas fa-edit"></i> Class</button>
                                            <button class="btn btn-sm btn-success mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSection"><i class="fas fa-edit"></i> Section</button>
                                            <button class="btn btn-sm btn-danger mb-1"><i class="fas fa-times"></i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Class Two</td>
                                        <td>
                                            <ul>
                                                <li>A</li>
                                                <li>B</li>
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdropEditClass"><i class="fas fa-edit"></i> Class</button>
                                            <button class="btn btn-sm btn-success mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSection"><i class="fas fa-edit"></i> Section</button>
                                            <button class="btn btn-sm btn-danger mb-1"><i class="fas fa-times"></i></button>
                                        </td>
                                        <!-- Edit Class Model -->
                                        <div class="modal fade" id="staticBackdropEditClass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Label">Update Class</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="">
                                                            <div class="mb-3">
                                                                <label for="inputName" class="form-label">Name</label>
                                                                <input type="text" class="form-control" id="inputName">
                                                                <div class="form-text">Provide class name.</div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-primary w-100">Update Class</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Class Model -->

                                        <!-- Edit Section Model -->
                                        <div class="modal fade" id="staticBackdropEditSection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="Label">Update Section</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="">
                                                            <div class="mb-3">
                                                                <!-- <label for="inputName" class="form-label">Name</label> -->
                                                                <input type="text" class="form-control mb-2" id="inputName" value="A">
                                                                <input type="text" class="form-control mb-2" id="inputName" value="B">
                                                                <input type="text" class="form-control mb-2" id="inputName" value="C">
                                                                <div class="form-text">Provide section name.</div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-primary w-100">Update Section</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Section Model -->
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
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false,
        });
    });
</script>