<?php
session_start();

    include("connection.php");
    include("main.js");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
    <form class="form" method="POST">
    <h1 class="form__title">Login</h1>
    <div class="form__input-group">
        <input type="text" class="form__input" name="username" autofocus placeholder="Username or email">
    </div>
    <div class="form__input-group">
        <input type="password" class="form__input" name="pwd" autofocus placeholder="Password">
    </div>
    <button class="form__button" type="submit">Continue</button>
    <p class="form__text">
        <a href="#" class="form__link">Forgot your password?</a>
    </p>
    <p class="form__text">
        <a class="form__link" href="signUp.php" id="linkCreateAccount">Don't have an account? Create account</a>
    </p>
    </form>
    <?php
        if(isset($_POST["submit"]))
    ?>
</div>

</body>
</html>