<?php

session_start();
// Redirect if not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
    </head>

	<body>
        <nav class="navbar navbar-dark bg-primary">
            <form action="logout.php" method='post'>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Logout</button>
            </form>
            <form action="register.php" method='post'>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Register</button>
            </form>
        </nav>
    </body>
</html>