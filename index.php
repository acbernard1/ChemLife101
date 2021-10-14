<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;

//Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>

<?php
session_start();

    require_once "connection.php";
    require_once "main.js";

    $user_data = check_login($con);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>ChemLife101 Homepage</title>
</head>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>ChemLife101 Homepage</title>
</head>

<body>
    <div class = "grid">
      <div class= "header">
    </div>
       <a class="chemlife">ChemLife101</a>
       <div class="navlinks"> <!––changed to div for easier adjustment––>
              <a class="home link" href="index.php">Home</a>
              <a class= "link" href="forum.php">Forum</a>
              <a class = "link" href="study.php">Study</a>
        </div>
        <div class= "b-group">
              <a class="signup" href="signUp.php"><Button>Sign Up</Button></a>
              <a class="login"href="login.php"><Button>Login</Button></a>
        </div>

        <main>
            Main
        </main>

        <div id="sidebar">
            <ul>
                <li id ="resources" class="resources">Resources<li>
                <li><a href="periodic.php">Periodic Table</a><li>
                <li><a href="conversions.php">Conversions</a><li>
            </ul>
        </div>

        <footer>
            <ul>
                <li><a href="aboutus.php">About Us</a><li>
                <li><a href="contactus.php">Contact Us</a><li>
                <li><a href="references.php">ChemLife101's References</a><li>
            </ul>
            <a href="logout.php">Log out</a>
        </footer>

    </body>
</html>