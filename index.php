<?php
/*//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);*/
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>ChemLife101 Homepage</title>
</head>
<body>
<header>
  <h1 class="logo">ChemLife101</h1>
  <input type="checkbox" id="nav-toggle" class="nav-toggle">
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutUs.php">About</a></li>
      <li><a href="contactUs.php">Contact Us</a></li>
    </ul>
  </nav>
  <label for="nav-toggle" class="nav-toggle-label">
    <span></span>
  </label>
</header>




<div class="content">
  <h2>Your content would go here</h2>
</div>
</body>
</html>