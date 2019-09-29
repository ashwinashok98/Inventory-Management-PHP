<?php
    // Connection Information.
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'stock';
    // Connect to Database.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) 
    {
        // Connection error
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
?>