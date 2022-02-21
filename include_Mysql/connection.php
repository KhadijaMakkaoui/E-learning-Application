<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e_class_db";

try {
    //retourne object ou null
    $conn=mysqli_connect($servername,$username,$password,$dbname);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>