<?php
    session_start();
    include('./connect.php');
    // Check if data is submitted
    if ( !isset($_POST['username'], $_POST['password']) )
     {
        // Display error message.
        die ('Please fill both the username and password field!');
     }

    if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) 
    {
        // Bind parameters (s = string, i = int, b = blob, etc)
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result 
        $stmt->store_result();
    }
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) 
        {
            // Verification success! User has loggedin!
            // Create sessions 
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
        }
        else 
        {
            echo 'Incorrect password!';
        }
    }
    else
    {
        echo 'Incorrect username!';
    }
    $stmt->close();
?>