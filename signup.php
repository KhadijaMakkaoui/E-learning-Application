<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
require './include_Mysql/connection.php';
require 'validate.php';
$errMessage= $passConf_val = $resultE = $resultP = $email_val = $pass_val = "";
$visibility = "d-none";
$pattern = "/^([a-z0-9_-]+)(\.[a-z0-9_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i";
//Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $visibility = "d-none";
  $isvalide = false;
  $email_val = $_POST['Email'];
  $pass_val = $_POST['Pass'];
  if (empty($email_val) || empty($pass_val)) {
    $errMessage = "BOTH FIELDS ARE REQUIRED";
    $visibility = "";
  } else {
    if (!preg_match($pattern, $email_val)) {
      $errMessage = "PLEASE ENTER A VALID EMAIL";
      $visibility = "";
    } else {
      $resultE = input_test($email_val);
      $resultP = input_test($pass_val);
      $isvalide = true;
      $visibility = "d-none";
    }
  }
  if ($isvalide) {
    //Échappe les caractères spéciaux dans une chaîne à utiliser dans une instruction SQL
    $userEmail = mysqli_real_escape_string($conn, $resultE);
    $userPass = mysqli_real_escape_string($conn, $resultP);
    //Verifier si l'email existe deja
    $query = "SELECT * FROM comptes WHERE email= '$userEmail' ";
    $result = mysqli_query($conn, $query);
    if(!$result){
      //Returns a string description of the last error
      die("SQL query failed: " . mysqli_error($conn));
   }
    $row = mysqli_fetch_array($result);
   //Avoir le nombre de ligne dans un resultat
    $count = mysqli_num_rows($result);

      header("location: index.php");
  } else {
      $errMessage = "Your Email or Password is Incorrect";
      $visibility = "";

  }
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIGN UP</title>
  <meta name="description" content="Sign in-Page de connexion">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./bootsrap/bootstrap.min.css" />
</head>

<body>
  <div class="background-gradient " style="overflow: hidden">
    <div class="row justify-content-center align-content-center vh-100">

      <form method="POST" action="" class="rounded-3 col-10 col-md-5 col-lg-4 px-4 bg-white">
        <div class=" mt-1">
          <img src="./images/logo_eclass.png" class="img-fluid w-25" id="img-logo" alt="logo" />
        </div>
        <div class="text-center">
          <h1>SIGN UP</h1>
          <p class="text-secondary">
           Enter your information to register your account
          </p>
        </div>
       
        <!-- User name -->
        <div class="">
          <label for="fullname" class="form-label">User name
            <span class="text-danger">*</span>
          </label>
          <input type="text" class="form-control" id="fullname" placeholder="Enter a user name" name="Email" value="<?php echo $email_val ?>" />
          <span class="text-danger" id="error-username"></span>
        </div>
        <!-- Email -->
        <div class="">
          <label for="exampleInputEmail1" class="form-label">Email address
            <span class="text-danger">*</span>
          </label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" name="Email" value="<?php echo $email_val ?>" />
          <span class="text-danger" id="error-email"></span>
        </div>
     <!-- Password -->
        <div class="">
          <label for="exampleInputPassword1" class="form-label">Password
            <span class="text-danger">*</span>
          </label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="Pass" value="<?php echo $pass_val ?>" />
          <span class="text-danger fs-6 " id="error-password"></span>
        </div>
        <!-- Confirm Password -->
        <div class="mb-2">
          <label for="ConfMdp" class="form-label">Confirm Password
            <span class="text-danger">*</span>
          </label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="Pass" value="<?php echo $passConf_val ?>" />
          <span class="text-danger" id="error-password-cofirme"></span>
        </div>
        <!-- Sign up button -->
        <div class="d-grid mb-2">
          <button type="submit" class="btn btn-info text-white">
            SIGN UP
          </button>
        </div>

        <hr>
        <div class="text-center">
           OR          
        </div>
        <div class="mb-2 text-center">
          <span>You have already an account?</span>
        <a href="index.php" class="link-info">SIGN IN</a>          
        </div>
      </form>
    </div>
  </div>

  <script src="./bootsrap/bootstrap.min.js"></script>
</body>

</html>