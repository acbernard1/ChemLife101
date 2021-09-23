<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>ChemLife101 Homepage</title>
</head>
<body>
    <header>
        <ul>
            <li id="chemlife101" class="active">ChemLife101</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Study</a></li>
            <li id="login"><a href="login.php">Login</a></li>
            <li id="signup"><a href="signup.php">Sign Up</a></li>
        </ul>
    </header>
</body>
</html>
