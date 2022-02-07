<?php include "./include_Mysql/connection.php"; ?>
<!-- //Recuperer les données de l'index selectionné -->
    <?php $id = $_GET['Enroll_Number']; ?>
    <?php $query = mysqli_query($conn, "SELECT * FROM students WHERE Enroll_Number = '$id' ");
    $r = mysqli_fetch_array($query);
    $student_name    = $r['Name'];
    $student_email   = $r['Email'];
    $student_phone   = $r['Phone'];
    $date            = $r['Date_addmission'];
    ?>
<?php 
//Effectue l'operation de UPDATE
if(isset($_POST['submit_update'])){
    $student_name    = $_POST['Name'];
    $student_email   = $_POST['Email'];
    $student_phone   = $_POST['Phone'];
    $date            = $_POST['Date_addmission'];
    $query      = mysqli_query($conn, "UPDATE students SET Name = '$student_name' ,Email = '$student_email', Phone = '$student_phone', Date_addmission = '$date' WHERE Enroll_Number = '$id'");
  if ($query) {
    header("location: dashStudents.php");
  }else{
    echo "<script>alert('Sorry update query not work')</script>";
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard- Students UPDATE</title>
    <meta name="description" content="Dashboard of Students List">
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./bootsrap/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css" />
</head>

<body>

</body>

</html>
<div class="container">

    <form method="POST" action="">
        <div class="form-group mb-2">
            <input type="text" name="Name" class="form-control" placeholder="Enter Name..." required="" value="<?php echo $student_name?>">
        </div><!-- form-group -->
        <div class="form-group mb-2">
            <input type="email" name="Email" class="form-control" placeholder="Enter Email..." required="" value="<?php echo $student_email?>">
        </div><!-- form-group -->
        <div class="form-group mb-2">
            <input type="text" name="Phone" class="form-control" placeholder="Enter Phone..." required="" value="<?php echo $student_phone?>">
        </div><!-- form-group -->
       
        <div class="form-group mb-2">
            <input type="date" name="Date_addmission" class="form-control" placeholder="Enter Date addmission..." required="" value="<?php echo $date?>">
        </div>
        <button type="submit" name="submit_update" class="btn btn-primary btn-info text-white">UPDATE</button>

    </form>
</div>