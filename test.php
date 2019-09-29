<?php
    $pass="ashwinashok";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    if(password_verify('ashwinashok', $hash))
    {
        echo("YAss");
    }
    else{
        echo("NO");
    }
    

?>