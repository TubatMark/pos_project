<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select User</title>
    <link rel="stylesheet" href="styles/css/select_user.css">
</head>

<body>
    <div class="container">
        <h1>Select a User Type</h1>
        <div class="icon-wrapper">
            <div class="icon" onclick="selectUserIcon()">
                <img src="styles/pictures/multiple_user.png" alt="User Icon">
            </div>
            <p class="icon-label">User</p>
        </div>
        <div class="icon-wrapper">
            <div class="icon" onclick="selectAdminIcon()">
                <img src="styles/pictures/admin_user.png" alt="Admin Icon">
            </div>
            <p class="icon-label">Admin</p>
        </div>
    </div>

    <script>
        function selectUserIcon() {
            // User icon selected
            console.log("User icon selected");

            // Redirect to user_login_page.php
            window.location.href = "user_login_page.php";
        }

        function selectAdminIcon() {
            // Admin icon selected
            console.log("Admin icon selected");

            // Redirect to admin_login_page.php
            window.location.href = "admin_login_page.php";
        }
    </script>

</body>

</html>