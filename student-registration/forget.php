<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>forgot password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/registration-css/fogot-password.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />

</head>

<body class="body">
  <div class="login-page">
    <?php if (isset($_GET['error'])) { ?>

      <p class="error">
        <?php echo $_GET['error']; ?>
      </p>

    <?php } ?>

    <div class="form">
      <div class="flex-container">

        <div class="flex-child">
          <img style="margin-right: 20px;" src="../assets/images/icons/logo.png" width="100px" height="160px">
        </div>

        <div class="flex-child">
          <h1 style="font-family: 'Cabin', sans-serif;">Forgot Password</h1>
          <p style="font-family: 'Public Sans', sans-serif;" id="para">
            "Join us in our mission to empower and upskill the next generation of Pakistan's workforce and become a part
            of the country's journey towards economic prosperity."
          </p>

          <form class="signup-form" method="POST" action="request_forget_password.php">
            <h4 style="margin-right: 430px;padding-bottom: -90px;">CNIC</h4>

            <input name="cnic" type="number" id="cnic" placeholder="&#xf007;  Enter Registered CNIC" />


            <br>
            <br>
            <button style="width: 300px;margin-bottom: 10px; font-family: 'Cabin', sans-serif;" type="submit">
              Send Reset Request
            </button>

          </form>
          <a class="anker"
            style="color:#46972c;font-size:smaller;margin-top:7px; margin-right: -35px; font-family: 'Cabin', sans-serif;"
            href="login.php">Back to Login</a>
        </div>

      </div>


    </div>
  </div>

  <script src="../js/registration js/forget.js"></script>

</body>

</html>