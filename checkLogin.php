<?php
if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==true))
header("location: index.php");

if($_SESSION['expireTime']==time()){
  header("location: logout.php");
    
}
?>