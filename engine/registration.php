<?php
    require_once "db.php";
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    if (!empty($name) and !empty($password) and !empty($password_repeat))
    {
        if()
            if($repeat_password = $password)
            {
                echo "Регистрируем"
            }
            else
            {
                echo "Повторный пароль неверный";
            }
    }
    else
    {
        echo "Все поля пустые";
    }
?>