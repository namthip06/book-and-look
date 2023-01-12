<?php

$connect = new mysqli("localhost","root","","book&look",3306);
$connect -> set_charset("utf8");

if(mysqli_connect_error()) {
    echo "connect error !";
}

?>