<?php
    $sql = "SELECT * FROM book";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);  

    $sql_bestseller = "SELECT * FROM book ORDER BY total_sales";
    $result_bestseller = mysqli_query($connect, $sql_bestseller);
    $rows_bestseller = mysqli_fetch_all($result_bestseller, MYSQLI_ASSOC);

    $sql_pre = "SELECT * FROM book ORDER BY price";
    $result_pre = mysqli_query($connect, $sql_pre);
    $rows_pre = mysqli_fetch_all($result_pre, MYSQLI_ASSOC);

    $sql_new = "SELECT * FROM book ORDER BY create_at DESC";
    $result_new = mysqli_query($connect, $sql_new);
    $rows_new = mysqli_fetch_all($result_new, MYSQLI_ASSOC);
?>