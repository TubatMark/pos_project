<?php

include "includes/db.php";

$email = "";
$password = "";
if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];
    $password = $_SESSION['pass'];
}
$sql = mysqli_query($link, "SELECT * FROM users WHERE email='$email' and password='$password'");
$count = mysqli_num_rows($sql);
if ($count == 0) {
    echo "error logging in";
}
?>