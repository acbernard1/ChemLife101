<?php
session_start();

    include("connection.php");
    include("main.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was posted
       $username =  $_POST['username'];
       $pwd = $_POST['pwd'];

       if(!empty($username) && !empty($pwd) && !is_numeric($username))
       {
            //Read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $pwd)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                         die;
                    }
                }
            }
       }
       else
       {
           echo "Wrong username or password.";
       }
    }

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