<?php
    session_start();
    require_once "db.php";

    function redir($link)
    {
        // echo "<script>window.location.href='".$link."'</script>";
        header("Location $link");
    }


?>