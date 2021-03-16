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
                    <!-- <div class="card-header">
						<h5 class="card-title mb-0"></h5>
					</div> -->
                    <div class="card-body">
                        <div class="row mb-5 justify-content-center">
                            <div class="col-sm-3">
                                <form>
                                    <select class="form-control mb-3">
                                        <option selected>Select A Class</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-sm-3">
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
                                <button type="submit" class="btn btn-primary col-sm-12">Filter</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <div class="table-responsive-sm">
                                    <table id="example" class="table table-striped my-0">
                                        <thead style="background-color: #566079;color: aliceblue;">
                                            <tr>
                                                <th>Student Id</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img class="rounded-circle rounded me-2 mb-2" width="50" height="50" src="../img/avatars/avatar-4.jpg" alt=""></td>
                                                <td>Computer</td>
                                                <td>
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
    $(document).ready(function() {
        $('#example').DataTable({
            "ordering": false,
        });
    });
</script>