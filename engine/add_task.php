<?php
    session_start();
    require_once "db.php";
    require "funcs.php";
    $task_text = $_POST['task_text'];
    $link = "../index.php";
    $uid = $_SESSION['user']['id'];

    if(!empty($task_text))
    {
        $query = $db->query("INSERT INTO `tasks` (`id`, `user_id`, `text`, `status`) VALUES (NULL, '$uid', '$task_text', '0')");
        $_SESSION['s_msg'] = "Задача успешно добавлена";
        redir($link);
    }
    else
    {
        $_SESSION['r_msg'] = "Пустое поле";
        redir($link);
    }

?>