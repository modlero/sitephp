<?php
if ($_COOKIE['user'] == "Да") {
    setcookie('user','Да', time() - 3600, '/');
}else {
    //сессии сохраняются лишь в браузере, а cookie на компьютере
    setcookie('user','Да', time() + 3600, '/'); //устанавливаем cookie
}
header("Location: index.php"); //переадресация на главную