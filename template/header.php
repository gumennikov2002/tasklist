<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="../lib/style.css">
        <title>TaskList</title>
    </head>
    <body>
        <!-- Верхний контейнер header -->
        <div class="full-header container-fluid">
        <header class="container pt-3 pb-2 d-flex justify-content-between">
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
                            <sup>(id: ".$_SESSION['user']['id'].")</sup>
                            <a href='engine/logout.php'>Выйти</a>
                        </div>
                    ";
                }
            ?>

        </header>
            </div>