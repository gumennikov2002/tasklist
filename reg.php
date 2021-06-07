<?php
    session_start();
    include "template/header.php";    
?>
<center>
<h2 class="mt-5">Регистрация</h2>
<div class="container w400">
    <form action="engine/registration.php" method="POST">
        <div class="row mt-3">
            <div class="col">
                <input type="text" name="login" class="form-control" placeholder="Логин">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <input type="password" name="password" class="form-control" placeholder="Пароль">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <input type="password" name="password_repeat" class="form-control" placeholder="Повторите пароль">
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-2" name="submit">
        <?php
            if(isset($_SESSION['r_msg']))
            {
                echo "<div class='alert alert-danger w400 mt-2' role='alert'>".$_SESSION['r_msg']."</div>";
                unset($_SESSION['r_msg']);
            }
            elseif(isset($_SESSION['s_msg']))
            {
                echo "<div class='alert alert-success w400 mt-2' role='alert'>".$_SESSION['s_msg']."</div>";
                unset($_SESSION['s_msg']);
            }
        ?>
    </form>
</div>
</center>