<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="css/for_books.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $sql = "SELECT * FROM `book`";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <?php require("header.php"); ?>
    <main>
        <div class="container">
            <h1>Book list</h1>
            <div class="container-book">
                <?php foreach ($rows as $row): ?>
                    <a class="book-box" href=" <?php echo "details.php?id=" . $row['id'] ?> ">
                        <img src="img_book/<?php echo $row["picture"]; ?>">
                        <div class="book-data">
                            <h3> <?php echo $row["name"]; ?> </h3>
                            <h4> <?php echo $row["author"]; ?> </h4>
                            <p> <?php echo $row["price"] . "฿"; ?> </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <?php require("footer.php"); ?>
</body>
</html>