<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/registration-css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> -->

</head>

<body class="body">

  <div class="login-page">
    <div class="form">
      <img class="logo" src="../assets/images/icons/logo.png" alt="">
      <div>
        <h1>Welcome back</h1>
        <p class="catchphrase ">"Transform your career trajectory and become a valuable asset to the Pakistani<br>
          workforce with THF's skill-building programs."</p>
      </div>
      <form class="login-form" action="VerifyLogin.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>

          <p class="error">
            <?php echo $_GET['error']; ?>
          </p>

        <?php } ?>

        <h5 style="text-align: left;">CNIC</h5>
        <input type="number" name="cnic" id="cnic" maxlength="13"
          placeholder=" Enter your valid CNIC number without dashes">

        <h5 style="text-align: left;">Password</h5>
        <div class="password-input-wrapper">
          <input type="password" name="password" id="password" maxlength="8" placeholder="Password" required>
          <i class="far fa-eye" id="toggle-password-icon"></i>
        </div>

        <br>
        <br>
        <a class="frgt" href="forget.php">Forgot password?</a>
        <br>
        <br>
        <button type="submit">LOGIN</button>
      </form>
      <p class="par2">Don't have an account?<a class="create" href="sign-up.php">Sign up</a></p>
    </div>
  </div>
  <script src="../js/registration js/index-login.js"></script>

</body>

</html>