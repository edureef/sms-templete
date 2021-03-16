<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="rsoftbd">
    <meta name="keywords" content="rsoftbd, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <title>Teacher | Home</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <img src="../img/logo.png" style="margin-left: 5ex;">
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
                        <a class="sidebar-link" href="show_student_list.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Students</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#academic" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Academic</span>
                        </a>
                        <ul id="academic" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_attendance.php">Attendance</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_class_routine.php">Class Routine</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_subject.php">Subject</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_syllabus.php">Syllabus</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="">Event Calender</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#liveClass" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="video"></i> <span class="align-middle">Live Class</span>
                        </a>
                        <ul id="liveClass" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_show_live_class.php">Your Live Classes</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="add_new_live_class.php">Add New</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#exam" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Examen</span>
                        </a>
                        <ul id="exam" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="tcr_marks.php">Marks</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="">Examen</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="assignment.php">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Assignment</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle d-flex">
                    <i class="hamburger align-self-center"></i>
                </a>


                <h2 class="ml-4">BIRSHRESHTHA NOOR MOHAMMAD PUBLIC COLLEGE (BNMPC)</h2>

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