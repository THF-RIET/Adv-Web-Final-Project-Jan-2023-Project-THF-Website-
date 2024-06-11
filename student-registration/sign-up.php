<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/registration-css/signup.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
</head>
<style>
  #password {
    display: block;
    margin-bottom: 10px;
  }

  .password-input-wrapper {
    position: relative;
  }

  #toggle-password-icon {
    position: absolute;
    top: 50%;
    right: 30px;
    transform: translateY(-50%);
    cursor: pointer;
  }
</style>

<body class="body">
  <div class="login-page">
    <?php if (isset($_GET['error'])) { ?>

      <p class="error">
        <?php echo $_GET['error']; ?>
      </p>

    <?php } ?>

    <div class="form">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img src="../assets/images/icons/logo.png" width="100px" height="160px">
          </div>
          <div class="col-lg-8 ">
            <h1>Create Account</h1>
            <p id="para">
              "Join us in our mission to empower and upskill the next generation of Pakistan's workforce and become a
              part of the country's journey towards economic prosperity."
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="flex-child">
            <form class="signup-form" onsubmit="process(event)" method="POST" action="submit-signup.php">
              <h5 style="text-align: left;">Full name</h5>
              <input type="text" name="fullname" id="fullname" placeholder="Your Full Name" required>

              <h5 style="text-align: left;">CNIC</h5>
              <input  type="number" name="cnic" id="cnic" maxlength="13" required placeholder="Your CNIC Number without dashes">


              <h5 style="text-align: left;">Phone number</h5>
              <input style="width:480px;" type="tel" name="phone" id="phone" placeholder="Your Number" required>

              <h5 style="text-align: left;">Email</h5>
              <input type="email" name="email" id="email" placeholder="Your Email" required>

              <h5 style="text-align: left;">Create password</h5>
              <div class="password-input-wrapper">
                <input type="password" name="password" id="password" required placeholder="Password">
                <i class="far fa-eye" id="toggle-password-icon"></i>
                <!-- <i class="fa-solid fa-eye-slash eye"  id="toggle-password-icon"  ></i> -->
              </div>
              <h5 style="text-align: left;">Enter your Location (optional)</h5>
              <input type="text" name="location" id="location" placeholder="Enter Location" required>
              <br>
              <br>
              <button type="submit">
                SIGN UP
              </button>
              <br>
              <br>
              <p>Already a user? <a href="login.php">Login</a></p>
            </form>
            <div class="alert alert-info" style="display: none;"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <script src="../js/registration js/index.js"></script>
  <script>
    const passwordInput = document.getElementById("password");
    const togglePasswordIcon = document.getElementById("toggle-password-icon");

    togglePasswordIcon.addEventListener("click", function () {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        togglePasswordIcon.classList.remove("fa-eye-slash");
        togglePasswordIcon.classList.add("fa-eye");
      } else {
        passwordInput.type = "password";
        togglePasswordIcon.classList.remove("fa-eye");
        togglePasswordIcon.classList.add("fa-eye-slash");
      }
    });

  </script>
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

  </script>
</body>

</html>