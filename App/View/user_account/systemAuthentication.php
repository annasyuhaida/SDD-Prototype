<?php
session_start();
require_once "connection.php";

if(isset($_POST["button"]))
{
    $icnumber = $_POST["icnumber"];
    $password = $_POST["password"];

    $query = "SELECT * FROM applicant WHERE Applicant IC='$icnumber' AND password='$password'";
    $result = mysqli_query($conn,$query);

}

?>