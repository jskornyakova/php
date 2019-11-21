<?php
function indexAction(){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`name`, `login`, `password`) 
                VALUES ('{$_POST['name']}', '{$_POST['login']}', '$password')";

    if ($result = mysqli_query(connect(), $sql)) {

        $_SESSION['newUser'] = true;
    }

   header('Location: /');
    exit;

}

if (empty($_SESSION['newUser'])) {
    echo <<<php

<form method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="login" placeholder="login">
    <input type="text" name="password" placeholder="password">
    <input type="submit" name="newUser" value="Зарегистрировать">
</form>


php;

}
}




