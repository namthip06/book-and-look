<?php
    session_start();
    require("connect.php");
    $errors = array();

    if(isset($_POST["login"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);

        if (empty($username)) {
            array_push($errors, "username is required");
        }
        if (empty($password)) {
            array_push($errors, "password is required");
        }

        if (count($errors) == 0) {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "you are now login";
                header("location: success.php");
            } else {
                array_push($errors, "wrong password or username");
                $_SESSION['error'] = "wrong password or username";
                header("location: login.php");
            }
        } else {
            $_SESSION['error'] = "กรอกข้อมูลไม่ครบ หรือกรอกข้อมูลไม่ถูกต้อง";
            header("location: login.php");
        }
    } 
?>