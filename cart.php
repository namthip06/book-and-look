<?php
session_start();
require('connect.php');
require('get.php');
require('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการในรถเข็น</title>
    <link rel="stylesheet" href="css/for_cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    $book_id = $_GET['id']; 
    $book_id += 1;
    $act = $_GET['act'];

    if($act=='add' && !empty($book_id)) {
		if(isset($_SESSION['cart'][$book_id])) {
			$_SESSION['cart'][$book_id]++;
		}
		else {
			$_SESSION['cart'][$book_id]=1;
		}
	}
 
	if($act=='remove' && !empty($book_id)) {
		unset($_SESSION['cart'][$book_id]);
	}

    ?>
    <main>
        <div class="container">
            <h1>รายการในรถเข็น</h1>
            <div class="line"></div>
            <div class="item-list">
                <?php
                    $total=0;
                    if(!empty($_SESSION['cart'])) {
                        foreach($_SESSION['cart'] as $book_id=>$qty) {
                            $sql_cart = "SELECT * FROM book WHERE id = '$book_id' ";
                            $result_cart = mysqli_query($connect, $sql_cart);
                            $rows_cart = mysqli_fetch_array($result_cart, MYSQLI_ASSOC);
                            $sum = $rows_cart['price'] * $qty;
                            $total += $sum;
                            $delete_book = $book_id - 1;

                            echo '<img src="img_book/' . $rows_cart["picture"] . '" alt="img-book">';
                            echo '<p>' . $rows_cart["name"] . '</p>';
                            echo '<p>' . $rows_cart["price"] . '</p>';
                            echo '<p>' . $_SESSION['cart'][$book_id] . '</p>';
                            echo '<a href=" ' ."cart.php?id=$delete_book&act=remove" . ' ">delete</a>';
                        }
                    } else {
                        echo "<p>ไม่มีสินค้าภายในตระกร้า</p>";
                    }
                ?>
            </div>
            <div class="line"></div>
            <div class="all-item-price">
                <?php
                    if(isset($sum)) {
                        echo "<p>รวม $total</p>";
                        echo "<p>ส่วนลด 0</p>";
                        echo "<h4>รวมทั้งหมด $total</h4>";
                        $_SESSION['total'] = $total;
                    }
                ?>
            </div>
            <div class="footer-cart">
                <p>กรุณากรอข้อมูลในการสมัครบัญชีกับทางร้านก่อน เพื่อบันทึกข้อมูลที่อยู่ในการจัดส่ง และช่องทางการชำระเงินต่อไป</p>
                <a class="red-btn" href="
                <?php
                    if(isset($_SESSION['success'])) {
                        echo "success.php";
                    } else {
                        echo "login.php";
                    }
                ?> ">
                    <h4>ส่งคำสั่งซื้อหนังสือ</h4>
                </a>
            </div>
        </div>
    </main>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>