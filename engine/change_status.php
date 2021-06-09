<?php
    session_start();
    require_once "db.php";
    require "funcs.php";
    $status = $_GET['status'];
    $id = $_GET['id'];
    $link = "../index.php";

    if($status == 0)
    {
        $query = $db->query("UPDATE `tasks` SET `status` = '1' WHERE `tasks`.`id` = $id;");
        redir($link);
    }
    elseif($status == 1)
    {
        $query = $db->query("UPDATE `tasks` SET `status` = '0' WHERE `tasks`.`id` = $id;");
        redir($link);
    }
?>