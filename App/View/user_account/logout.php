<?php
session_start();
unset($_SESSION["icnumber"]);
unset($_SESSION["password"]);
header("Location:userLogin.php");
?>