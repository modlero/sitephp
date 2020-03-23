<?php
//print_r($_POST);
//Принимаем данные
$email = trim($_POST['email']);
$message = trim($_POST['message']);

//Обрабатываем данные
$errors = ""; //массив с ошибками
if($email == "") {
    $errors = "Введите ваш email!";
}elseif ($message == "") {
    $errors = "Введите сообщение!";
} elseif (strlen($message) < 10) {
    $errors = "Слишком короткое сообщение!";
}

if ($errors != "") { //обрабатываем массив с ошибками
    echo $errors;
    exit; //завершение программы(дальше не выполняется)
}

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта SITEPHP")."?="; //тема сообщения(кодируем)
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n"; //загловок письма

mail("teenagers.mail422@yandex.ru", $subject, $message, $headers);

header("Location: about.php"); //переадресация на about.php