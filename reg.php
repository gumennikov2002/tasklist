<?include "template/header.php"?>
<center>
<h2 class="mt-5">Регистрация</h2>
<div class="container custom-input">
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
    </form>
    <a href="#" class="btn btn-success mt-2">Зарегистрироваться</a>
</div>
</center>