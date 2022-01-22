<?php
include "connect.php";
session_start();
$sql="INSERT INTO bug VALUES (NULL,'{$_POST["Title"]}', '{$_POST["Desc"]}', '', '{$_POST["Status"]}', '{$_SESSION["user"]}')";
    if (mysqli_query($con, $sql)) {
        header('Location: Home.php');
      } else {
        header("Location: F_Loginerror.php");
      }
?>