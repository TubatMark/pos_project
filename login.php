<?php
	include "includes/db.php";

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$user_result = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");

	#echo "welcome maderpaker";


	if ($user_result && mysqli_num_rows($user_result) > 0) {
		$user = mysqli_fetch_assoc($user_result);
		$user_type = $user['user_type'];

		if ($user_type == 'admin') {
			header("Location: users/admin/admin_page.php");
			exit();
		} elseif ($user_type == 'cashier') {
			header("Location: users/employees/employee_page.php");
			exit();
		} else {
			echo "No record found. Please register first.";
		}
	} else {
		echo "No record found. Please register first.";
	}
?>
