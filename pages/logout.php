<?php
session_start();
// Закрыть сессию
if (session_destroy()) {
    // Перенаправление на вход
    header("Location: login.php");
}
?>