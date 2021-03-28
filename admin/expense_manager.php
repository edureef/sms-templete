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
                        <button type="button" class="btn btn-sm btn-outline-info float-end mr-4" data-bs-toggle="modal" data-bs-target="#staticBackdropExpense" style="float: inline-end;">
                            Add New Expense
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-info float-end" data-bs-toggle="modal" data-bs-target="#staticBackdropCategory" style="float: inline-end; margin-right:3ex;">
                            Add Expense Category
                        </button>

                        <!-- Expense Modal -->
                        <div class="modal fade" id="staticBackdropExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <!-- Category Modal -->
                        <div class="modal fade" id="staticBackdropCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Expense Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label">Expense category name</label>
                                                <input type="text" class="form-control" id="inputName">
                                                <div class="form-text"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary w-100">Save Expense Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <th colspan="5">Cetagory Name</th>
                                    <th class="text-center">Option</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            Academic Support
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            Research
                                        </td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form class="row mb-5">
                            <div class="col-sm-4">
                                <input type="date" class="form-control form-control-sm">
                            </div>
                            <div class="col-sm-4">
                                <select class="form-select form-select-sm">
                                    <option selected>Expense Cetagory</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-sm btn-primary w-100">Filter</button>
                            </div>
                        </form>
                        <table id="example" class="table table-bordered pt-3 pb-3">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Expense category</th>
                                    <th class="text-center">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropEditExpense"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                    </td>
                                    <!-- Edit Expense Model -->
                                    <div class="modal fade" id="staticBackdropEditExpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="Label">Update Expense</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                        <div class="mb-3">
                                                            <label class="form-label">Date</label>
                                                            <input type="date" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Amount</label>
                                                            <input type="number" class="form-control">
                                                            <div class="form-text"></div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Expense category</label>
                                                            <select class="form-select">
                                                                <option selected>Select Expense Category</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                            <div class="form-text"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-primary w-100">Update Expense</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Expense Model -->
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