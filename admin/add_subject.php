<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Subject</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Create Subject
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Class</label>
                                <select class="form-select">
                                    <option selected>Select a Class</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="form-text">Select a class.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject name</label>
                                <input type="text" class="form-control">
                                <div class="form-text">Provide subject name.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Create</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row justify-content-center mb-5 g-3">
                                <div class="col-sm-4">
                                    <select class="form-select">
                                        <option selected>Select a Class</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                                </div>
                            </div>
                        </form>
                        <table id="example" class="table table-bordered pt-3 pb-3">
                            <thead>
                                <tr>
                                    <th scope="col">Subject Name</th>
                                    <th class="text-center">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Biology</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSubject"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Chemistry</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSubject"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                    <!-- Edit Class Model -->
                                    <div class="modal fade" id="staticBackdropEditSubject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label">Update Subject</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="mb-3">
                                                            <label for="inputName" class="form-label">Class</label>
                                                            <select class="form-select">
                                                                <option selected>Select a Class</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="inputSubjectName" class="form-label">Subject Name</label>
                                                            <input type="text" class="form-control" id="inputSubjectName">
                                                            <div class="form-text">Provide subject name.</div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary w-100">Update Subject</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Edit Class Model -->
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