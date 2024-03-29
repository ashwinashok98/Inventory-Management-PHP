<?php
    session_start();
    include('./connect.php');
    // Redirect if not logged in
    if (!isset($_SESSION['loggedin']))
    {
        header('Location: index.html');
        exit();
    }
    if(($_SESSION['admin']==0))
    {
        echo '<script language="javascript">';
        echo 'alert("Not An Admin")';
        echo '</script>';
        echo '<script>window.location.href = "home.php";</script>';
    }
    else
    {
?>


<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
    </head>

	<body>

		<div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                        <form action="registration.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
		
	</body>
</html>
<?php
    }
?>