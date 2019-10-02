<?php
    session_start();
    include('./connect.php');
    if (!isset($_SESSION['loggedin']))
    {
        header('Location: index.html');
        exit();
    }
    else
    {
        $item=$_POST['item'];
        if ($stmt = $con->prepare('select * from inventory where productId=?')) 
        {
            // Bind parameters (s = string, i = int, b = blob, etc)
            $stmt->bind_param('i', $item);
            $stmt->execute();
            // Store the result 
            $stmt->store_result();

        }
        header('Location: index.html');
        $stmt->close();
    }
?>