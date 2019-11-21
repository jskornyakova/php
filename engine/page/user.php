<?php
function indexAction(){
    header('Location: /?p=user&a=one');
    exit;

}

function oneAction()
{


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $sql = "SELECT `login`, `password` 
             FROM `users` WHERE `login` = '{$_POST['login']}'";

        $user = [];
        if ($res = mysqli_query(connect(), $sql)) {

            $user = mysqli_fetch_assoc($res);
            if (!empty($user)) {
                if (password_verify($_POST['password'], $user['password'])) {
                    $_SESSION['login'] = true;
                }
            }
        }

        header('Location: /?p=user&a=entry');
        exit;
    }


    if (empty($_SESSION['login'])) {
        echo <<<php

        <form method="post">
            <input type="text" name="login" placeholder="login">
            <input type="text" name="password" placeholder="password">
            <input type="submit" name="sent" value="Выполнить вход">
            <hr>
            <a href='?p=newUser'>Зарегистрировать нового пользователя</a>
        </form>


php;

    } else {

        exitAction();
    }

}

function entryAction(){
    return <<<php
        <p>Привет, пользователь!</p>
        <a href='?p=user&a=exit&exit=1'>Exit</a>
php;

}

function exitAction(){
    if (!empty($_GET['exit'])) {
        header('Location: /');
        exit;
    }


}



