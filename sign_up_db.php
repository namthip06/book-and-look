<?php
    session_start();
    require("connect.php");
    $errors = array();

    if (isset($_POST["sign_up"])) {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $email = mysqli_real_escape_string($connect, $_POST["email"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $address = mysqli_real_escape_string($connect, $_POST["address"]);
        $payment = mysqli_real_escape_string($connect, $_POST["payment"]);

        if (empty($username)) {
            array_push($errors, "username is required");
        }
        if (empty($email)) {
            array_push($errors, "email is required");
        }
        if (empty($password)) {
            array_push($errors, "password is required");
        }
        if (empty($address)) {
            array_push($errors, "address is required");
        }
        if (empty($payment)) {
            array_push($errors, "payment is required");
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";
        $query_check = mysqli_query($connect, $user_check_query);
        $result_check = mysqli_fetch_assoc($query_check);

        if ($result_check) {
            if ($result_check['username'] === $username) {
                array_push($errors, "username already exists");
            }
            if ($result_check['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        if (count($errors) == 0) {
            $sql = "INSERT INTO user (username, email, password, address, payment) VALUES ('$username', '$email', '$password', '$address', '$payment')";
            mysqli_query($connect, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you are now login";
            header('location: success.php');
        } else {
            $_SESSION['error'] = "กรอกข้อมูลไม่ครบ หรือชื่ออีเมลถูกลงทะเบียนไปแล้ว";
            header("location: sign_up.php");
        }
    }
?>