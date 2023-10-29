<?php
session_start();
setcookie('user', $user['name'], time()-60*60*60, "/");
unset($_SESSION["name"]);
unset($_SESSION["color"]);
header('Location: /');
echo "<p>Успешный вход</p>"
?>