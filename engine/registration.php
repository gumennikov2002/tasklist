<?php
    session_start();
    require_once "db.php";
    require "funcs.php";
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $link = "../reg.php";

    if(!empty($login) and !empty($password) and !empty($password_repeat))
    {
        $query = mysqli_query($db, "SELECT id FROM `users` WHERE login = '$login'");

        if(mysqli_num_rows($query) < 1)
        {
            if($password_repeat != $password)
            {
                $_SESSION['r_msg'] = "Вы не правильно повторили пароль";
                redir($link);
            }
            else
            {
                $hash_password = md5($password);
                $query = mysqli_query($db, "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$hash_password')");
                if($query)
                {
                    unset($_SESSION['r_msg']);
                    $_SESSION['s_msg'] = "Успешная регистрация";
                    redir($link);

                }
            }

        }
        else
        {
            $_SESSION['r_msg'] = "Логин уже существует";
            redir($link);
        }
    }
    elseif(empty($login) or empty($password))
    {
        $_SESSION['r_msg'] = "Вы не ввели логин или пароль";
        redir($link);
    }
    elseif(empty($password_repeat))
    {
        $_SESSION['r_msg'] = "Повторите пароль";
    }
    elseif(empty($login) and empty($password) and empty($password_repeat))
    {
        $_SESSION['r_msg']= "Все поля пустые";
        redir($link);
    }
?>