<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>All Students</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-sm-4">
                                <form>
                                    <select class="form-control form-control-sm mb-3">
                                        <option selected>Select A Class</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <form>
                                    <select class="form-control form-control-sm mb-3">
                                        <option selected>Select Section</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-sm btn-primary col-sm-12">Filter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive table-responsive-sm">
                                    <table id="example" class="table table-sm table-striped my-0">
                                        <thead style="background-color: #566079;color: aliceblue;">
                                            <tr>
                                                <th>Student Id</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th class="text-center">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img class="rounded-circle rounded me-2 mb-2" width="50" height="50" src="../img/avatars/avatar-4.jpg" alt=""></td>
                                                <td>Computer</td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary btn-sm">View Details</button>
                                                </td>
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
<script>
    $('#example').DataTable({
        responsive: true,
        "ordering": false,
    });
</script>