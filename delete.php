<?php 
include "./include_Mysql/connection.php";

if(isset($_GET['Enroll_Number'])){
 $id = $_GET['Enroll_Number'];
 $query = mysqli_query($conn, "DELETE FROM students WHERE Enroll_Number = '$id'");
 if($query){
  header("location:dashStudents.php");
 }else{
  echo "<script>alert('Sorry delete query not work!')</script>";
 }
}

 ?>