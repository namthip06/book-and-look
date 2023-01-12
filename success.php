<?php
session_start();
require('connect.php');
require('get.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order received</title>
    <link rel="stylesheet" href="css/for_success.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="cart.php" method="post">
        <main>
            <a class="back-btn" href="index.php">
                <img src="img/arrow.svg" alt="arrow">
                <h6>BACK</h6>
            </a>
            <h1>order received</h1>
            <div class="detail-order">
                <p>หมายเลขคำสั่งซื้อที่ 1</p>
                <p>ราคารวมทั้งหมด <?php echo $_SESSION['total']; ?> บาท</p>
            </div>
        </main>
    </form>
</body>
</html>