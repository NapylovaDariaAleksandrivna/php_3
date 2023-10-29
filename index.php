<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        session_start();
        if ($_SESSION['name']==''):
        ?>
    <div style="display: flex;justify-content: space-around;">
        
        <div>
            <h1>Форма регистрации</h1>
            <form action="chek.php" method="post" style="display: flex; flex-direction: column;">
                <input type="email" name="email" id="email" placeholder="Введите email">
                <input type="text" name="name" id="name" placeholder="Введите имя">
                <input type="password" name="password" id="password" placeholder="Введите пароль">
                <input type="text" name="color" id="color" placeholder="Введите цвет в форме #XXXXXX">
                <button type="submit">Регистрация</button>
            </form>
        </div>
        <div>
            <h1>Форма входа</h1>
            <form action="auth.php" method="post" style="display: flex; flex-direction: column;">
                <input type="email" name="email" id="email" placeholder="Введите email">
                <input type="password" name="password" id="password" placeholder="Введите пароль">
                <button type="submit">Вход</button>
            </form>
        </div>
    </div>
    <?php
    else:
        $color=$_SESSION['color'];
        echo "<p style='color:#$color;'>Добро пожаловать, " . $_SESSION['name'] . " Чтобы выйти нажмите <a href='/exit.php'>здесь</a>.</p>";
    ?>
    <?php
    endif;
    ?>
</body>

</html>