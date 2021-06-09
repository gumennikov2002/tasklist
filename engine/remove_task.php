<?php
    session_start();
    require_once "db.php";
    require "funcs.php";

    $id = ($_GET['del_id']) ? $db->real_escape_string(trim($_GET['del_id'])) : '';
    $del = $db->prepare("DELETE FROM `tasks` WHERE `tasks`.`id` = ?");
    $del->bind_param("i", $id);
    $del->execute();
    $del = $del->get_result();
    $link = "../index.php";
    $_SESSION['s_msg'] = "Запись успешно удалена";
    redir($link);


?>