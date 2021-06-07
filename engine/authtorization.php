<?php
    session_start();
    require_once "db.php";
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hash_password = md5($password);
    $link_back = "<script>window.location.href='../login.php'</script>";
    $link_home = "<script>window.location.href='../index.php'</script>";

    $query_user = mysqli_query($db, "SELECT * FROM `users` WHERE login = '$login' and password = '$hash_password'");
    $fetch_user = mysqli_fetch_array($query_user);
    $id = $fetch_user[0];

    if(!empty($login) and !empty($password))
    {
        if(mysqli_num_rows($query_user) > 0)
        {
            $_SESSION['user']= [
                'id' => $id,
                'login' => $login
            ];
            echo $link_home;
        }
        else
        {
            $_SESSION['r_msg'] = "Неправильный логин или пароль";
            echo $link_back;
        }
    }
    else
    {
        $_SESSION['r_msg'] = "Неправильный логин или пароль";
        echo $link_back;
    }
?>