<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles/css/login.css">
</head>

<body>
    <div class="container">
        <h1>Admin Login</h1>
        <div class="icon-wrapper">
            <div class="icon">
                <img src="styles/pictures/admin_user.png" alt="Admin Icon">
            </div>
        </div>

        <form action="includes/login.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>

    </div>
</body>

</html>