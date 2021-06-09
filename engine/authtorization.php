<?php
    session_start();
    require_once "db.php";
    require "funcs.php";
    $login = ($_POST['login']) ? $db->real_escape_string(trim($_POST['login'])) : '';
    $password = ($_POST['password']) ? $db->real_escape_string(trim($_POST['password'])) : '';
    $hash_password = md5($password);

    $query_user = $db->prepare("SELECT * FROM `users` WHERE login = ? and password = ?");
    $query_user->bind_param("ss", $login, $hash_password);
    $query_user->execute();
    $query_user = $query_user -> get_result();
    $fetch_user = $query_user->fetch_assoc();
    $id = $fetch_user[id];

    if(!empty($login) and !empty($password))
    {
        if($query_user->num_rows > 0)
        {
            $_SESSION['user']= [
                'id' => $id,
                'login' => $login
            ];
            $link = "../index.php";
            redir($link);
        }
        else
        {
            $_SESSION['r_msg'] = "Неправильный логин или пароль";
            $link = "../login.php";
            redir($link);
        }
    }
    else
    {
        $_SESSION['r_msg'] = "Неправильный логин или пароль";
        $link = "../login.php";
        redir($link);
    }
?>