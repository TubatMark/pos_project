<?php
	include "db.php";

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$user_result = mysqli_query($con, "SELECT * FROM users WHERE name='$name'");

	#echo "welcome maderpaker";


	if ($user_result && mysqli_num_rows($user_result) > 0) {
		$user = mysqli_fetch_assoc($user_result);
		$user_type = $user['user_type'];

		if ($user_type == 'admin') {
			header("Location: ../users/admin/admin_dashboard.php");
			exit();
		} elseif ($user_type == 'cashier') {
			header("Location: ../users/employees/employee_page.php");
			exit();
		} else {
			echo "No record found. Please register first.";
		}
	} else {
		echo "No record found. Please register first.";
	}
?>
