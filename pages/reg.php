<?php
    session_start()
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Авторизация</title>
    </head>
    <body>
        <span style="color: red"><?php if(!empty($_SESSION['error'])) echo $_SESSION['error']; else echo  "" ?></span>
        <form action="../php/reg.php" method="post">
            <label for="">
                <input type="text" name="fio" PLACEHOLDER="ФИО">
            </label>
            <label for="">
                <input type="text" name="login" PLACEHOLDER="Логин">
            </label> <br>
            <label for="">
                <input type="password" name="password" PLACEHOLDER="Пароль">
            </label> <br>
            <input type="submit" value="Зарегистрироваться">
        </form>
        <a href="./reg.php">Войти</a>
    </body>
</html>