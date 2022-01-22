
<?php
include "connect.php";
session_start();
$sql="INSERT INTO comments VALUES (NULL, {$_POST["id"]}, '{$_POST["comment"]}', '{$_SESSION['user']}')";
echo "{$_SESSION['counter']}";
    if (mysqli_query($con, $sql)) {
        header('Location: Home.php');
      } else {
        header("Location: F_Loginerror.php");
      }
?>