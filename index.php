<?php
    include "template/header.php";
    if(isset($_SESSION['user']))
    {
        include "template/tasks.php";
    }
    else
    {
        include "template/empty_session.php";
    }
    include "template/footer.php";
?>