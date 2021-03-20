<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="card">
            <div class="row card-body">
                <div class="col-sm-6">
                    <h5>Syllabus</h5>
                </div>

                <div class="col-sm-6">
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#syllabusModal" data-backdrop="static" data-keyboard="false" style="float: inline-end;">Create syllabus</button>

                    <!-- Modal -->
                    <div class="modal fade" id="syllabusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="makeSyllabusModel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="makeSyllabusModel">Create syllabus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="input-group row mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="input-group row mb-3">
                                                <label class="form-label">Class</label>
                                                <select class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="input-group row mb-3">
                                                <label class="form-label">Section</label>
                                                <select class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option value="1">A</option>
                                                    <option value="2">B</option>
                                                    <option value="3">C</option>
                                                </select>
                                            </div>
                                            <div class="input-group row mb-3">
                                                <label class="form-label">Subject</label>
                                                <select class="form-select">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Math</option>
                                                    <option value="2">Physics</option>
                                                    <option value="3">English</option>
                                                </select>
                                            </div>
                                            <div class="input-group row mb-3">
                                                <label for="" class="form-label">Upload syllabus</label>
                                                <input class="form-control" id="" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer mx-auto col-10">
                                    <button type="button" class="btn btn-primary w-100">Create syllabus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Model -->
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive-sm">
                                    <table id="example" class="table table-striped my-0">
                                        <thead style="background-color: #566079;color: aliceblue;">
                                            <tr>
                                                <th>Title</th>
                                                <th>Syllabus</th>
                                                <th>Subject</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Final Syllabus</td>
                                                <td><button class="btn btn-sm btn-info">Download File</button></td>
                                                <td>Computer</td>
                                                <td><button class="btn btn-sm btn-outline-danger"><i class="align-middle" data-feather="delete"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>First Term Syllabus</td>
                                                <td><button class="btn btn-sm btn-info">Download File</button></td>
                                                <td>English</td>
                                                <td><button class="btn btn-sm btn-outline-danger"><i class="align-middle" data-feather="delete"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>First Term Syllabus</td>
                                                <td><button class="btn btn-sm btn-info">Download File</button></td>
                                                <td>Mathematics</td>
                                                <td><button class="btn btn-sm btn-outline-danger"><i class="align-middle" data-feather="delete"></i></button></td>
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