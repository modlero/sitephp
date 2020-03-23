<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <!--    Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <title>Контактая форма</title>
</head>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
    <h3 class="mb-5">Контактая форма</h3>
    <form action="check.php" method="post">
        <input name="email" type="email" placeholder="Введите email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение" cols="20" rows="5"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
</div>
<?php require "blocks/footer.php" ?>