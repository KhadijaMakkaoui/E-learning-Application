<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e_classe_db";

try {
    $conn=mysqli_connect($servername,$username,$passwordCr,$dbname);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>