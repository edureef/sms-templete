<?php require 'header.php' ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-6">
                        <h5>Your live classes</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                                    <table id="example" class="table table-sm table-striped py-4">
                                        <thead style="background-color: #566079;color: aliceblue;">
                                            <tr>
                                                <th>Schedule</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Meeting info</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: aliceblue;">
                                                <td>
                                                    <small>
                                                        <strong>Date</strong> : Wed, 17-Mar-2021<br>
                                                        <strong>Time</strong> : 01:30 AM
                                                    </small>
                                                </td>
                                                <td>Class One</td>
                                                <td>English</td>
                                                <td>
                                                    <small>
                                                        <strong>Attachment</strong> : <a href="" class="" download=""><strong>Download</strong> </a>
                                                    </small>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">Join</button>
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
            responsive: true
        });
    });
</script>