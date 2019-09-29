<?php
    $pass="test";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    if(password_verify('test', $hash))
    {
        echo("YAss");
        echo($hash);
    }
    else{
        echo("NO");
    }
    

?>