<?php


function input_test($data){
    $data = trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}


?>

