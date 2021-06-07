<?php
    session_start();
    require_once "db.php";
    $status = $_GET['status'];
    $id = $_GET['id'];
    $link_back = "<script>window.location.href='../index.php'</script>";

    if($status == 0)
    {
        $query = mysqli_query($db, "UPDATE `tasks` SET `status` = '1' WHERE `tasks`.`id` = $id;");
        echo $link_back;
    }
    elseif($status == 1)
    {
        $query = mysqli_query($db, "UPDATE `tasks` SET `status` = '0' WHERE `tasks`.`id` = $id;");
        echo $link_back;
    }
?>