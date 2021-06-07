<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>TaskList</title>
    </head>
    <body>
        <!-- Верхний контейнер header -->
        <header class="container mt-3 d-flex justify-content-between">
            <h1><strong>Task</strong>List</h1>
            <?php
                if(!isset($_SESSION['user']))
                {
                    echo "
                        <div class='reg-links'>
                            <a href='login.php'>Войти</a>
                            <a href='reg.php'>Регистрация</a>
                        </div>
                    ";
                }
                else
                {
                    echo "
                        <div class='reg-links'>
                            Добро пожаловать, <b>".$_SESSION['user']['login']."</b>
                            <a href='reg.php'>Выйти</a>
                        </div>
                    ";
                }
            ?>

        </header>