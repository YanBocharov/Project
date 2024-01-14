<?php
$connect = mysqli_connect("localhost:8889", "root", "123456azz", "LoginSystem");
// Проверка подключения
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>