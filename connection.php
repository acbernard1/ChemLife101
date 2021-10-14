<?php

    $dbhost = "us-cdbr-east-04.cleardb.com";
    $dbuser = "b21349ad86976d";
    $dbpass = "22f1f85e";
    $dbname = "heroku_1c20d2071a3d5d8";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$con)
    {
        die("failed to connect!");
    }
?>