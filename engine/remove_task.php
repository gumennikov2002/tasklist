<?php
    session_start();
    require_once "db.php";

    $id = $_GET['del_id'];

    $del = mysqli_query($db, "DELETE FROM `tasks` WHERE `tasks`.`id` = $id");
    $_SESSION['s_msg'] = "Запись успешно удалена";
    echo "<script>window.location.href='../index.php'</script>";


?>