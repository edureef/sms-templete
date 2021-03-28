<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Dashboard Template based on Bootstrap 5">
    <meta name="author" content="rsoftbd">
    <meta name="keywords" content="rsoftbd">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Admin | Home</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="../js/fontawesome.js"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <img src="../img/logo.jpg" width="150" height="150" class="img-thumbnail rounded-circle" style="margin-left: 28px;">
                    <hr>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        NAVIGATION
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#user" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
                        </a>
                        <ul id="user" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="admission.php">Admission</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_teacher.php">Teachers</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_accountant.php">Accountant</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#academic" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Academic</span>
                        </a>
                        <ul id="academic" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="add_class.php">Class</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_subject.php">Subject</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_classRoom.php">Class Room</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_class_routine.php">Class Routine</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#liveClass" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="video"></i> <span class="align-middle">Live Class</span>
                        </a>
                        <ul id="liveClass" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="live_class_setting.php">Live Class Settings</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#exam" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Examen</span>
                        </a>
                        <ul id="exam" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="admin_marks.php">Marks</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_examen.php">Examen</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_grade.php">Grades</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="">promotion</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#accounting" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Accounting</span>
                        </a>
                        <ul id="accounting" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="std_invoice.php">Students Fees Manager</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="expense_manager.php">Expense Manager</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#admin_setting" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
                        </a>
                        <ul id="admin_setting" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <!-- <li class="sidebar-item"><a class="sidebar-link" href="system_setting.php">System Settings</a></li> -->
                            <li class="sidebar-item"><a class="sidebar-link" href="website_setting.php">Website Settings</a></li>
                            <!-- <li class="sidebar-item"><a class="sidebar-link" href="school_setting.php">School Settings</a></li> -->
                            <li class="sidebar-item"><a class="sidebar-link" href="payment_setting.php">Payment Settings</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="smtp_setting.php">Smtp Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>


                <h4 class="w-100">Your School/Collage Name <a href="" class="btn btn-outline-info text-dark ml-4">Visit Website</a></h4>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="../img/avatars/avatar-3.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="tcr_profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="reset_password.php"><i class="align-middle me-1" data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>