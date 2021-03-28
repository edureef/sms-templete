<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Grade</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Add Grade
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label class="form-label">Grade</label>
                                <input type="text" class="form-control">
                                <div class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grade point</label>
                                <input type="number" class="form-control">
                                <div class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mark from</label>
                                <input type="number" class="form-control">
                                <div class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mark upto</label>
                                <input type="number" class="form-control">
                                <div class="form-text"></div>
                            </div>

                            <button type="submit" class="btn btn-sm btn-primary w-100">Create Grade</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-bordered pt-3 pb-3">
                            <thead>
                                <tr>
                                    <th scope="col">Grade</th>
                                    <th class="text-center">Grade point</th>
                                    <th class="text-center">Mark from</th>
                                    <th class="text-center">Mark upto</th>
                                    <th class="text-center">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>4.0</td>
                                    <td>70</td>
                                    <td>79</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSubject"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>A+</td>
                                    <td>5.0</td>
                                    <td>80</td>
                                    <td>100</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEditSubject"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                    <!-- Edit Class Model -->
                                    <div class="modal fade" id="staticBackdropEditSubject" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label">Update Grade</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="mb-3">
                                                            <label class="form-label">Grade</label>
                                                            <input type="text" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Grade point</label>
                                                            <input type="number" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Mark from</label>
                                                            <input type="number" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Mark upto</label>
                                                            <input type="number" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-primary w-100">Update Grade</button>
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