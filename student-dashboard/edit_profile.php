<?php

// Fetching data from the database
include "../database/db.php";
global $conn;

$getCNIC = isset($_GET['cnic']) ? intval($_GET['cnic']) : null;
$userName = isset($_GET['userName']) ? $_GET['userName'] : null;
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="./css/style.css">


    <style>
        nav {
            position: relative;
        }

        .logodesigness {
            position: absolute;
            background-color: green;
            width: 100%;
            height: auto;
            padding: 5px;
        }

        @media screen and (max-width:425px) {
            .logodesign img {
                width: 90px;
                height: 60.5px;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="index.php?cnic=<?php echo $getCNIC ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>

            </a>
            <div class="logodesigness"><img src="./images/3.png" alt=""></div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link text-dark" href="index.php?cnic=<?php echo $getCNIC ?>">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <li style="background-color:#043C8B" class="nav-item active">
                <a class="nav-link text-dark"
                    href="user_profile.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-cog text-light"></i>
                    <span style="color: antiquewhite;">Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="course.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-wrench text-dark"></i>
                    <span>Courses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="payment.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Payment</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="test.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Admission Test</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="interview.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-chart-area text-dark"></i>
                    <span>Interview</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="status.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-table text-dark"></i>
                    <span>Status</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-success" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <h1> Dashboard </h1>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $userName ?>
                                </span>
                                <img class="img-profile rounded-circle" src="./assets/images/icons/profile-icon.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?php
                $sql = "SELECT * FROM student WHERE stdCNIC = '" . $getCNIC . "' ";
                $stdID = $stdFullName = $stdCNIC = $stdEmail = $stdContact = $stdFatherName = $stdFatherCNIC = $stdAge = $stdGender = $stdAddress = $stdCity = " ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $stdID = $row["stdID"];
                        $stdFullName = $row["stdFullName"];
                        $stdEmail = $row["stdEmail"];
                        $stdContact = $row["stdContact"];
                        $stdFatherName = $row["stdFatherName"];
                        $stdFatherCNIC = $row["stdFatherCNIC"];
                        $stdAge = $row["stdAge"];
                        $stdGender = $row["stdGender"];
                        $stdAddress = $row["stdAddress"];
                        $stdCity = $row["stdCity"];
                        $stdCNIC = $row["stdCNIC"];
                    }

                }

                $sql2 = "SELECT * FROM student_education WHERE stdCNIC = '" . $getCNIC . "' ";
                $trade = $institute = $qualification = "";
                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        $trade = $row2["trade"];
                        $institute = $row2["instituteName"];
                        $qualification = $row2["qualification"];

                    }

                }
                ?>
                <!-- Begin Page Content -->
                <section class="course">
                    <br>
                    <h1>Personal Information</h1>
                    <form action="upload_updated_info.php?cnic=<?php echo $stdCNIC ?>" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error">
                                <?php echo $_GET["error"] ?>
                            </p>
                        <?php } ?>

                        <div class="row">
                            <div class="course-col">
                                <input type="text" placeholder="Full Name" name="fullname"
                                    value="<?php echo $stdFullName; ?>" required>
                                <input type="text" placeholder="Father Name" name="fathername"
                                    value="<?php echo $stdFatherName; ?>" required>
                                <input type="email" placeholder="Email" name="stdemail" value="<?php echo $stdEmail; ?>"
                                    required>
                                <input type="number" placeholder="Contact" name="contact"
                                    value="<?php echo $stdContact; ?>" required>

                                <input type="number" disabled placeholder="CNIC" name="cnic"
                                    value="<?php echo $stdCNIC; ?>">

                            </div>

                            <div id="disabled" class="course-col">
                                <input type="number" placeholder="Father CNIC Number" name="fCNIC"
                                    value="<?php echo $stdFatherCNIC; ?>" required>
                                <input type="number" placeholder="Age" name="age" value="<?php echo $stdAge; ?>"
                                    required>
                                <!-- <input type="text" placeholder="Gender" name="gender" value="<?php echo $stdGender; ?>"> -->
                                <select style="padding: 10px; width:250PX;" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <input type="text" placeholder="City" name="city" value="<?php echo $stdCity; ?>"
                                    required>
                                <input type="text" placeholder="Address" name="address"
                                    value="<?php echo $stdAddress; ?>" required>

                            </div>
                        </div>
                        <br>
                        <br>
                        <h1>Education Information</h1>
                        <div class="row">
                            <div class="course-col">
                                <select style="padding: 10px; width:250PX;" name="education">
                                    <option value="">Select a Qualification</option>
                                    <option value="Middle">Middle</option>
                                    <option value="Metric/ 0 - Level">Metric/ 0 - Level</option>
                                    <option value="Intermediate/ A - Level">Intermediate/ A - Level</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="ADP">ADP</option>
                                </select>

                                <input type="text" placeholder="Field of Study" name="trade"
                                    value="<?php echo $trade; ?>" required>

                                <input type="text" placeholder="School/College/University Name" name="institute"
                                    value="<?php echo $institute; ?>" required>

                            </div>



                        </div>

                        <!-- Start of Upload Documents -->
                        <!-- <h1>Upload Documents</h1>
                        <div class="row">
                    
                            <div class="course-col">
                                Upload CNIC (FRONT)
                                <input class="form-control" type="file" name="stdFrontCNIC">
                                Upload CNIC (BACK)
                                <input class="form-control" type="file" name="stdBackCNIC">
                                Upload Father CNIC (FRONT)
                                <input class="form-control" type="file" name="FFrontCNIC">
                                Upload Father CNIC (BACK)
                                <input class="form-control" type="file" name="FBackCNIC">
                                Upload Metric Marksheet (FRONT)
                                <input class="form-control" type="file" name="marksheetFront">
                                Upload Metric Marksheet (BACK)
                                <input class="form-control" type="file" name="marksheetBack">
                            </div>
                        </div> -->

                        <!-- End of Upload Documents -->

                        <input type="submit" style="width: 130px; background-color:#043C8B" class="btn btn-primary"
                            value="Save">
                    </form>
                    <br><br><br>
                </section>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button -->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- Logout Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="logout.php?cnic=<?php echo $getCNIC ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>