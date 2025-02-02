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

    <title>Student Profile</title>

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
        nav{
            position: relative;
        }
        .logodesigness{
            position: absolute;
            background-color: green;
            width: 100%;
            height: auto;
            padding: 5px;
        }
        @media screen and (max-width:425px) {
            .logodesign img{
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?cnic=<?php echo $getCNIC?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                
            </a>
            <div class="logodesigness"><img src="./images/3.png" alt=""></div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link text-dark" href="index.php?cnic=<?php echo $getCNIC?>">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <li style="background-color:#043C8B" class="nav-item active">
                <a class="nav-link text-dark" href="user_profile.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                    <i class="fas fa-fw fa-cog text-light"></i>
                    <span style="color: antiquewhite;">Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="course.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                    <i class="fas fa-fw fa-wrench text-dark"></i>
                    <span>Courses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="payment.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Payment</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="test.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                    <i class="fas fa-fw fa-folder text-dark"></i>
                    <span>Admission Test</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="interview.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                    <i class="fas fa-fw fa-chart-area text-dark"></i>
                    <span>Interview</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="status.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
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
                            <h1>Dashboard</h1>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $userName?></span>
                                <img class="img-profile rounded-circle" src="./assets/images/icons/profile-icon.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="user_profile.php?cnic=<?php echo $getCNIC?>&userName=<?php echo $userName?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a> -->
                                <!-- <a class="dropdown-item" href="#">
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

                <!-- Begin Page Content -->

                <section class="course">
                    
             <?php
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
                


<section class="course">
    <br>
    <h1>Personal Information</h1>
    <form method="POST" action="">
        <div class="row">
            <div class="course-col">
                <h6 style="text-align: left; color: black; font-weight: bold;" id="labels">Full Name</h6>
                <input type="text" disabled name="fullName" placeholder="Your Full Name">
                <h6 style="text-align: left; color: black; font-weight: bold;">Father Name</h6>
                <input type="text" disabled name="fatherName" placeholder="Your Father Name">
                <h6 style="text-align: left; color: black; font-weight: bold;">Email</h6>
                <input type="text" disabled name="email" placeholder="Your Email">
                <h6 style="text-align: left; color: black; font-weight: bold;">Contact</h6>
                <input type="text" disabled name="contact" placeholder="Your Contact">
                <h6 style="text-align: left; color: black; font-weight: bold;">CNIC</h6>
                <input type="text" disabled name="cnicNumber" placeholder="Your CNIC Number">
            </div>
            <div id="disabled" class="course-col">
            <h6 style="text-align: left; color: black; font-weight: bold;">Father CNIC</h6>
                <input type="text" disabled name="fatherCnicNumber" placeholder="Your Father CNIC Number">
                <h6 style="text-align: left; color: black; font-weight: bold;">Age</h6>
                <input type="text" disabled name="age" placeholder="Your Age">
                <h6 style="text-align: left; color: black; font-weight: bold;">Gender</h6>
                <input type="text" disabled name="gender" placeholder="Your Gender">
                <h6 style="text-align: left; color: black; font-weight: bold;">City</h6>
                <input type="text" disabled name="city" placeholder="Your City">
                <h6 style="text-align: left; color: black; font-weight: bold;">Address</h6>
                <input type="text" disabled name="address" placeholder="Your Address">
            </div>
        </div>

        <h1>Education Information</h1>
                        <div class="row">
                            <div class="course-col">
                            <h6 style="text-align: left; color: black; font-weight: bold;">Qualification</h6>
                            <input type="text" disabled placeholder="Your Qualification" name="eduaction"
                                    value="<?php echo $qualification; ?>" required>
                                    
                                    <h6 style="text-align: left; color: black; font-weight: bold;">Field of Study</h6>
                                <input type="text" disabled placeholder="Trade" name="trade"
                                    value="<?php echo $trade; ?>" required>

                                    <h6 style="text-align: left; color: black; font-weight: bold;">School/College/University Name</h6>

                                <input type="text" disabled placeholder="Institute Name" name="institute"
                                    value="<?php echo $institute; ?>" required>

                            </div>



                        </div>

 <?php
// Assuming you have already established a MySQL database connection


$query = "SELECT * FROM student WHERE stdCNIC = '" . $getCNIC . "' "; 

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Setting the fetched data as the value of input fields
    echo "<script>";
    echo "document.querySelector('input[name=fullName]').value = '{$row['stdFullName']}';";
    echo "document.querySelector('input[name=fatherName]').value = '{$row['stdFatherName']}';";
    echo "document.querySelector('input[name=email]').value = '{$row['stdEmail']}';";
    echo "document.querySelector('input[name=contact]').value = '{$row['stdContact']}';";
    echo "document.querySelector('input[name=cnicNumber]').value = '{$row['stdCNIC']}';";
    echo "document.querySelector('input[name=fatherCnicNumber]').value = '{$row['stdFatherCNIC']}';";
    echo "document.querySelector('input[name=age]').value = '{$row['stdAge']}';";
    echo "document.querySelector('input[name=gender]').value = '{$row['stdGender']}';";
    echo "document.querySelector('input[name=city]').value = '{$row['stdCity']}';";
    echo "document.querySelector('input[name=address]').value = '{$row['stdAddress']}';";
    echo "</script>";
    echo '<button type="button" style="width: 130px; background-color:#043C8B" class="btn btn-primary" id="otherpage" onclick="redirectToUpdatePage(\'' . $row['stdCNIC'] . '\') ">Update Profile</button>';
   
}

// Close the database connection
mysqli_close($conn);
?>
        <!-- <a id="but" href="update.php"><button type="button"  class="btn btn-primary" id="otherpage" onclick="redirectToUpdatePage(\'' . $row["stdCNIC"] . '\') ">Update</button></a> -->
    </form>
</section>
                
                 <br>

            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
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
                            <a class="btn btn-primary" href="logout.php?cnic=<?php echo $getCNIC?>">Logout</a>
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


            <script>
                // document.getElementById("otherpage").addEventListener('click' ,  () => {
                //     window.location="profile2.php";
                // });
                
            function redirectToUpdatePage(cnic) {
            // Redirect to the new page with the CNIC value
            window.location.href = 'edit_profile.php?cnic=' + cnic +'&userName=<?php echo $userName?>';
        }
                
    </script>
</body>

</html>