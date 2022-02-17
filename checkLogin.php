<?php
if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==true))
header("location: index.php");

?>