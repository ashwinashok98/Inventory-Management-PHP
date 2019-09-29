<?php
    session_start();
    include('./connect.php');
    
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
?>