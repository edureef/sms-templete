<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5>Student fee manager</h5>
                        </div>
                        <div class="col-6">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-info float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: inline-end;">
                                Add invoice
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Add invoice</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="">
                                                <div class="mb-3">
                                                    <label class="form-label">Class</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected>Select a class</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Student</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected>Select a student</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Invoice title</label>
                                                    <input type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Total amount</label>
                                                    <input type="number" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Paid amount</label>
                                                    <input type="number" class="form-control form-control-sm">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Status</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected>Select a status</option>
                                                        <option value="1">Paid</option>
                                                        <option value="2">Unpaid</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-primary w-100">Create Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col col-sm-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-sm">
                                    <option selected>All Class</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-sm">
                                    <option selected>All Status</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Unpaid</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col-sm-12 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                            <table id="example" class="table table-hover">
                                <thead>
                                    <th>Invoice no</th>
                                    <th>Student</th>
                                    <th>Invoice title</th>
                                    <th>Total amount</th>
                                    <th>Paid amount</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </thead>
                                <tbody>
                                    <tr>
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
</main>

<?php require 'footer.php'; ?>
<script>
    $('#example').DataTable({
        responsive: true,
        "ordering": false,
    });

    // $(document).ready(function() {
    //     $('#example').DataTable({
    //         responsive: true,
    //         "ordering": false,
    //     });
    // });
</script>