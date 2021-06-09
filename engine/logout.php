<?php
    session_start();
    require "funcs.php";
    unset($_SESSION['user']);
    $link = "../index.php";
    redir($link);
?>