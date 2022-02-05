<?php
$servername="localhost";
$username="root";
$password="";

try {
    $conn=mysqli_connect($servername,$username,$password);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>