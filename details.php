<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/for_details.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require('header.php');
    require('get.php');
    $book_id = (int)$_GET["id"];
    $book_id -= 1;
    ?>
    <main>
        <div class="left-box">
            <div class="bg-gray"></div>
            <img src="img_book/<?php echo $rows[$book_id]["picture"]; ?>" alt="book">
        </div>
        <div class="right-box">
            <a class="back-btn" href="index.php">
                <img src="img/arrow.svg" alt="arrow">
                <h6>BACK</h6>
            </a>
            <div class="top-side">
                <h1> <?php echo $rows[$book_id]["name"]; ?> </h1>
                <h3> <?php echo $rows[$book_id]["author"]; ?> </h3>
            </div>
            <div class="line"></div>
            <div class="down-side">
                <h3> <?php echo $rows[$book_id]["price"] . ".00 บาท"; ?> </h3>
                <div class="mini-icon">
                    <img src="img/location.svg" alt="location">
                    <p>จัดส่งจากกรุงเทพมหานคร</p>
                </div>
                <div class="mini-icon">
                    <img src="img/box.svg" alt="box">
                    <p>มีสินค้าพร้อมส่ง</p>
                </div>
            </div>
            <div class="btn-box">
                <a class="add-btn" href="<?php echo "cart.php?id=$book_id&act=add" ?>">
                    <h4 class="add-btn">Add to cart</h4>
                </a>
            </div>
        </div>
    </main>
    <div class="details-book">
        <p> <?php echo $rows[$book_id]["synopsis"]; ?> </p>
    </div>
    <?php require("footer.php"); ?>
</body>
</html>