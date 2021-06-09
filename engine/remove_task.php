<?php
    session_start();
    require_once "db.php";
    require "funcs.php";

    $id = $_GET['del_id'];
    $link = "../index.php";

    $del = mysqli_query($db, "DELETE FROM `tasks` WHERE `tasks`.`id` = $id");
    $_SESSION['s_msg'] = "Запись успешно удалена";
    redir($link);


?>