<?php
    session_start();
    include('./connect.php');
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
        $pass=$_POST['password'];
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        if ($stmt = $con->prepare('INSERT INTO `accounts`(`username`, `password`, `email`) VALUES (?,?,?)')) 
        {
            // Bind parameters (s = string, i = int, b = blob, etc)
            $stmt->bind_param('sss', $_POST['username'],$hash,$_POST['email']);
            $stmt->execute();
            // Store the result 
            $stmt->store_result();

        }
        header('Location: index.html');
        $stmt->close();
    }
?>