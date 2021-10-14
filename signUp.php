<?php
session_start();
    
    include("connection.php");
    include("main.js");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
       $username =  $_POST['username'];
       $pwd = $_POST['pwd'];

       if(!empty($username) && !empty($pwd) && !is_numeric($username))
       {
            //Save to database
            $user_id = random_num(50);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($conn, $query);

            header("Location: login.php");
            die;
       }
       else
       {
           echo "Please enter valid info.";
       }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
    <form id="createAccount">
        <h1 class="form__title">Create Account</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
            <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="text" class="form__input" name="username" autofocus placeholder="Email Address">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" name="pwd" autofocus placeholder="Password">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Confirm password">
            <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" type="submit" name="submit">Continue</button>
        <p class="form__text">
            <a class="form__link" href="login.php" id="linkLogin">Already have an account? Sign in</a>
        </p>
    </form>
</div>
</body>
</html>