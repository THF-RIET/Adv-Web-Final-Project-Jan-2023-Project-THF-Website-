<?php
include "../database/db.php";
global $conn;
$user_type = "student";
$user_email = $userName = $stdStatus = $studentProfileStatus = "";
$getCNIC = isset($_GET['cnic']) ? intval($_GET['cnic']) : null;
$error = isset($_GET['error']) ? $_GET['error'] : "";
$enableOption = false;

$selectStmt = "SELECT * FROM student WHERE stdCNIC = '" . $getCNIC . "'";
if ($result2 = $conn->query($selectStmt)) {
    while ($row = $result2->fetch_assoc()) {
        $user_email = $row["stdEmail"];
        $userName = $row["stdFullName"];
        $stdStatus = $row["stdStatus"];
        $studentProfileStatus = $row["isProfileComplete"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admission</title>
    <script src="script.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/admissionTest.css">
    <link rel="stylesheet" href="./css/quiz.css">
    <style>
        nav {
            position: relative;
        }

        .logodesign {
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
            <div class="logodesign"><img src="./images/3.png" alt=""></div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-dark" href="index.php?cnic=<?php echo $getCNIC ?>">
                    <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark"
                    href="user_profile.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
                    <i class="fas fa-fw fa-cog text-dark"></i>
                    <span>Profile</span></a>
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

            <li style="background-color:#043C8B" class="nav-item active">
                <a class="nav-link text-dark">
                    <i class="fas fa-fw fa-folder text-light"></i>
                    <span style="color: antiquewhite;">Admission Test</span></a>
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
                            <h1>Dashboard</h1>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle"
                                href="user_profile.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>"
                                id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $userName ?>
                                </span>
                                <img class="img-profile rounded-circle" src="./images/profile.jpeg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item"
                                    href="user_profile.php?cnic=<?php echo $getCNIC ?>&userName=<?php echo $userName ?>">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <section class="home-section">
                        <div class="home-content">
                            <i class='bx bx-menu'></i>

                            <img src="./image/profile.jpeg" alt="">
                        </div>

                        <div class="main">
                            <div class="first color1">
                                <button class="first1" id="dark">English</button>
                            </div>
                            <div class="first color2">
                                <button class="first2"> General Knowledge</button>
                            </div>
                            <div class="first color3">
                                <button class="first4">Mathematics</button>
                            </div>
                            <div class="first color4">
                                <button class="first4">Trade</button>
                            </div>
                            <div class="clock">
                                <div id="time">60:00</div>
                            </div>

                        </div><!----- end box ------->

                        <div class="quiz" style="margin-top: 50px;">
                            <h1>Admission Test</h1>
                            <div id="quiz-container">
                                <div id="question"></div>
                                <div id="options"></div>
                                <button id="next-btn">Next</button>
                            </div>

                        </div>



                    </section>
                </div>
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
                                    <span aria-hidden="true"></span>
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
                <script src="./vendor/jquery/quiz.js"></script>

                <script>
                    // Variables to keep track of quiz state
                    var currentQuestion = 0;
                    var quizData = [];
                    var answer = "";
                    var score=0;

                    // Fetch quiz data from the server
                    function fetchQuizData() {
                        var section = 'GK'; // Replace with the selected section
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', 'fetch_quiz.php?section=' + section, true);
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                quizData = JSON.parse(xhr.responseText);
                                showQuestion();
                            }
                        };
                        xhr.send();
                    }

                    // Display the current question and options
                    function showQuestion() {
                        var questionElement = document.getElementById('question');
                        // var optionsElement = document.getElementById('options');
                        var currentQues = quizData[currentQuestion];


                        questionElement.textContent = currentQues.question;

                        // // Clear previous options
                      

                        // Create and append option elements
                        // currentQues.options.forEach(function (option, index) {
                        //     var optionElement = document.createElement('div');
                        //     optionElement.textContent = option;
                        //     optionElement.onclick = selectOption;
                        //     optionsElement.appendChild(optionElement);
                        // });

                        var container = document.getElementById("options");
                        container.innerHTML = '';
                        answer = currentQues.correctAnswer;

                        // Define an array of options
                        var options = [currentQues.option1, currentQues.option2, currentQues.option3, currentQues.option4];

                        // Loop through the options array
                        for (var i = 0; i < options.length; i++) {
                            // Create a radio button element
                            var radioButton = document.createElement("input");
                            radioButton.type = "radio";
                            radioButton.name = "option";
                            radioButton.value = options[i];

                            // Create a label element for the radio button
                            var label = document.createElement("label");
                            label.textContent = options[i];

                            // Append the radio button and label to the container
                            container.appendChild(radioButton);
                            container.appendChild(label);
                            var breakElemnt = document.createElement("br");
                            container.appendChild(breakElemnt);
                            container.onclick = selectOption;
                        }
                    }

                    // Handle option selection
                    function selectOption() {
                        // Add your logic to handle the selected option
                        // You can store the selected option, check the answer, etc.
                        var radioButtons = document.querySelectorAll('input[name="option"]');
                        var selectedValue;

                        // Add change event listener to each radio button
                        radioButtons.forEach(function (radioButton) {
                            radioButton.addEventListener('change', function () {
                                // Get the selected value
                                selectedValue = this.value;
                                if(selectedValue == correctAnswer) // Perform any action with the selected value
                                {
                                    score = score+1;
                                }else{
                                    score = score+0;
                                }
                            });
                        });
                    }

                    // Handle the Next button click
                    function nextQuestion() {
                        // selectOption();
                        currentQuestion++;
                        if (currentQuestion < quizData.length) {
                            showQuestion();
                        } else {
                            // Quiz has ended, show final score or completion message
                            window.location.href = 'finish.php?cnic='+cnic+'&score='+score;
                        }
                    }

                    // Event listener for the Next button
                    document.getElementById('next-btn').addEventListener('click', nextQuestion);

                    // Fetch quiz data when the page loads
                    fetchQuizData();


                </script>


</body>

</html>