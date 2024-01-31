<?php 
session_start();
include "connection.php";
$uid = $_GET['uid'];
$sql = "DELETE FROM users WHERE id='$uid'";
$res = mysqli_query($conn, $sql);
if($res) {
    // echo "User deleted successfully.";
    $_SESSION['msg'] = "User deleted successfully.";
} else {
    $_SESSION['msg'] = "User is not deleted.";
}
header("location: select.php");

