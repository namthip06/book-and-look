<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book&Look</title>
    <link rel="stylesheet" href="css/for_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require('header.php');
    require('get.php'); ?>
    <main>
        <div class="container">
            <h1>Best Sellers</h1>
            <div class="container-book">
                <?php for ($i=count($rows_bestseller)-1;$i>count($rows_bestseller)-5;$i--): ?>
                    <a class="book-box" href=" <?php echo "details.php?id=" . $rows_bestseller[$i]['id'] ?> " >
                        <img src="img_book/<?php echo $rows_bestseller[$i]["picture"]; ?>">
                        <div class="book-data">
                            <h3> <?php echo $rows_bestseller[$i]["name"]; ?> </h3>
                            <h4> <?php echo $rows_bestseller[$i]["author"]; ?> </h4>
                            <p> <?php echo $rows_bestseller[$i]["price"] . " ฿"; ?> </p>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>

        <div class="container">
            <h1>pre-order</h1>
            <div class="container-book">
                <?php for ($i=4;$i>0;$i--): ?>
                    <a class="book-box" href=" <?php echo "details.php?id=" . $rows_pre[$i]['id'] ?> " >
                        <img src="img_book/<?php echo $rows_pre[$i]["picture"]; ?>">
                        <div class="book-data">
                            <h3> <?php echo $rows_pre[$i]["name"]; ?> </h3>
                            <h4> <?php echo $rows_pre[$i]["author"]; ?> </h4>
                            <p> <?php echo $rows_pre[$i]["price"] . " ฿"; ?> </p>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
            </div>
        </div>

        <div class="container">
            <h1>new arrivals</h1>
            <div class="container-book">
                <?php for ($i=4;$i>0;$i--): ?>
                    <a class="book-box" href=" <?php echo "details.php?id=" . $rows_new[$i]['id'] ?> " >
                        <img src="img_book/<?php echo $rows_new[$i]["picture"]; ?>">
                        <div class="book-data">
                            <h3> <?php echo $rows_new[$i]["name"]; ?> </h3>
                            <h4> <?php echo $rows_new[$i]["author"]; ?> </h4>
                            <p> <?php echo $rows_new[$i]["price"] . " ฿"; ?> </p>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>
    </main>
    <?php require("footer.php"); ?>
</body>
</html>