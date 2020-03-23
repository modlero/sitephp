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
    <h3 class="mb-5">Наши статьи</h3>
    <div class="d-flex flex-wrap">
        <?php
            for ($i=0;$i<5;$i++) : //цикл на новости (через :)
        ?>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Просто текст</h4>
            </div>
            <div class="card-body">
                <img class="img-thumbnail" src="img/<?php echo ($i + 1) ?>.jpg">
                <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
            </div>
        </div>
        <?php endfor; //конец цикла ?>
    </div>
</div>
<?php require "blocks/footer.php" ?>