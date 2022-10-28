<?php
require('../DataBase/Queries.php');
session_start();

function EmailValidate($Email)
{
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        return (true);
    } else {
        return (false);
    }
}


if (isset($_POST['email']) &&  isset($_POST['password']) && isset($_POST['rememberMe'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $rememberMe = $_POST['rememberMe'];

    if (empty($email)) {
        echo ("1101"); //email1 not set
    } else if (strlen($email) > 90) {
        echo ("1102"); //email1 must have 10 char
    } else if (!EmailValidate($email)) {
        echo ("1103"); //email1 tNumber
    } else if (empty($password)) {
        echo ("1301");
    } else {
        $user_rs = serchStudentByEmailPassword($email, $password);



        $user_num = $user_rs->num_rows;

        if ($user_num == 1) {

            $_SESSION['user'] =  $user_rs->fetch_assoc();

            if ($rememberMe == "true") {
                setcookie('email', $email, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/");
            } else {
                setcookie('email', $email, time() - 1, "/");
                setcookie('password', $password, time() - 1, "/");
            }

            echo("1802");


        } else {
            echo ("1801");
        }
    }
} else {
    echo ("Something Wen't Wrong , Please try Again! : ERROR:1800");
}
