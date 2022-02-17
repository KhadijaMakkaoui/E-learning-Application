<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<?php
require './include_Mysql/connection.php';
require 'validate.php';

$errMessage = $resultE = $resultP = $email_val = $pass_val = "";
$visibility = "d-none";

$pattern = "/^([a-z0-9_\-]+)(\.[a-z0-9_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i";

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
    //Sécuriser les données à integrer dans la requete
    $userEmail = mysqli_real_escape_string($conn, $resultE);
    $userPass = mysqli_real_escape_string($conn, $resultP);
    $query = "SELECT * FROM comptes WHERE email= '$userEmail' AND mdp='$userPass'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die("SQL query failed: " . mysqli_error($conn));
   }
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
      // $_SESSION['login_email'] = $userEmail;
      $_SESSION['userName'] = $row['user_name'];
      $_SESSION['Login'] = true;

      header("location: dashHome.php");
    } else {
      $errMessage = "Your Email or Password is Incorrect";
      $visibility = "";
    }
  }
}

?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Log in</title>
  <meta name="description" content="Sign in-Page de connexion">
  <link rel="stylesheet" href="style.css" />
  <!-- Bootsrap css links -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="./bootsrap/bootstrap.min.css" />
</head>

<body>
  <div class="background-gradient vh-100" style="overflow: hidden">
    <div class="row justify-content-center align-content-center vh-100">

      <form method="POST" action="" class="rounded-3 col-10 col-md-5 col-lg-4 px-4 bg-white">
        <div class="mb-3 mt-3">
          <img src="./images/logo_eclass.png" class="img-fluid w-25" id="img-logo" alt="logo" />
        </div>
        <div class="mb-3 text-center">
          <h1>SIGN IN</h1>
          <p class="text-secondary">
            Enter your credentials to access your account
          </p>
        </div>
        <div class="alert alert-danger <?php echo $visibility ?>" role="alert">
          <?php echo $errMessage ?>
        </div>
        <div class="mb-4">
          <label for="exampleInputEmail1" class="form-label">Email address
            <span class="text-danger">*</span>
          </label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" name="Email" value="<?php echo $email_val ?>" />
          <!-- required -->
          <span class="text-danger"><?php #echo $err_email 
                                    ?></span>
        </div>
        <div class="mb-4">
          <label for="exampleInputPassword1" class="form-label">Password
            <span class="text-danger">*</span>
          </label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" name="Pass" value="<?php echo $pass_val ?>" />
          <!-- required -->

        </div>
        <div class="form-group mb-4">
          <label class="form-check-label"><input type="checkbox"> Remember me</label>
        </div>
        <div class="d-grid mb-4">
          <button type="submit" class="btn btn-info text-white">
            SIGN IN
          </button>
        </div>

        <div class="mb-4 text-center">
          <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
          <span>
            Forgot your password?
            <a href="dashHome.php" class="link-info">Reset Password</a>
          </span>
        </div>
      </form>
    </div>
  </div>

  <script src="./bootsrap/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>