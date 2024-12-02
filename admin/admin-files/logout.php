<?php
session_start();
unset($_SESSION['email']);
setcookie("remberme",'',1,"/");

header("Location:sign-in.php");//redirect for login
exit();
?>`