
<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;

?>

<?php

    $dbhost = "us-cdbr-east-04.cleardb.com";
    $dbuser = "b21349ad86976d";
    $dbpass = "22f1f85e";
    $dbname = "heroku_1c20d2071a3d5d8";

    if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
    {
        die("failed to connect!");
    }
?>