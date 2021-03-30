<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Add a new live class</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-10 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="mb-2">Date</label>
                                <input type="date" class="form-control form-control-sm mb-4">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Time</label>
                                <input type="time" class="form-control form-control-sm mb-4">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Class</label>
                                <select name="" id="" class="form-control form-control-sm mb-4">
                                    <option value="">Select A Class</option>
                                    <option value="">Class One</option>
                                    <option value="">Class Two</option>
                                    <option value="">Class Three</option>
                                    <option value="">Class Four</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Subject</label>
                                <select name="" id="" class="form-control form-control-sm mb-4">
                                    <option value="">Select A Subject</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Zoom meeting id</label>
                                <input type="text" name="" id="" class="form-control form-control-sm mb-4">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Zoom meeting password</label>
                                <input type="text" name="" id="" class="form-control form-control-sm mb-4">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Upload attachment</label>
                                <input type="file" name="" id="" class="form-control form-control-sm mb-3">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Topic</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control form-control-sm mb-4"></textarea>
                            </div>
                            <div class="row justify-content-center">
                                <button type="button" class="col-sm-6 mb-5 mt-3 btn btn-sm btn-secondary btn-md btn-block">Create meeting</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'footer.php' ?>