<?php
    session_start();
    require_once "db.php";
    $task_text = $_POST['task_text'];
    $link_back = "<script>window.location.href='../index.php'</script>";
    $uid = $_SESSION['user']['id'];

    if(!empty($task_text))
    {
        $query = mysqli_query($db, "INSERT INTO `tasks` (`id`, `user_id`, `text`, `status`) VALUES (NULL, '$uid', '$task_text', '0')");
        $_SESSION['s_msg'] = "Задача успешно добавлена";
        echo $link_back;
    }
    else
    {
        $_SESSION['r_msg'] = "Пустое поле";
        echo $link_back;
    }

?>