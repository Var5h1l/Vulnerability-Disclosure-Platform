
<?php
include "connect.php";
session_start();
$sql="DELETE FROM bug WHERE id={$_GET["ID"]}";
$sql1="DELETE FROM comments WHERE post_id={$_GET["ID"]}";
mysqli_query($con, $sql1);
echo "{$_SESSION['counter']}";
    if (mysqli_query($con, $sql)) {
        header('Location: Home.php');
      } else {
        header("Location: F_Loginerror.php");
      }
?>