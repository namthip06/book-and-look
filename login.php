<?php 
    session_start();
    require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/for_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="left-side">
            <img src="img/cat.svg" alt="img-cat">
        </div>
        <form action="login_db.php" method="post">
            <div class="right-side">
                <h1>login</h1>
                <?php include('errors.php'); ?>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <p>
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
                <div class="group-input">
                    <input type="text" name="username" id="username" placeholder="username">
                    <input type="password" name="password" id="password" placeholder="password">
                    <a class="login" href="#">Forgot Password?</a>
                </div>
                <div class="login-btn">
                    <button type="submit" name="login" class="btn">login</button>
                    <div class="text-under-btn">
                        <p>Don't have an account?</p>
                        <a class="login" href="sign_up.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>