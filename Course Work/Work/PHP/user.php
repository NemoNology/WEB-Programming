<?php
require("DB.php");

error_reporting(E_ERROR);

$errorMessage = '';
global $id;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $mail = trim($_POST['mail']);
    $password = trim($_POST['password']);
    $repeatPassword = trim($_POST['repeatPassword']);

    if ($name === '' || $mail === '' || $password === '') {
        $errorMessage = 'Все поля должны быть заполнены';
    } elseif ($password !== $repeatPassword) {
        $errorMessage = 'Пароли не совпадают';
    } elseif (isThereUserWithThatMail($mail)) {
        $errorMessage = 'Данная почта уже занята';
    } else {
        $id = addUser($name, $mail, $password);
    }
} else {
    $name = '';
    $mail = '';
}






// if (isThereUserWithThatMail($mail)) {
//     $errorMassage = 'Данная почта уже используется';
// } else {
//     $errorMassage = '';
//     $id = addUser($name, $mail, $password);
// header("Location: index.php");
// }