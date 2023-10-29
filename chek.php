<?php
    session_start(); 
    $login = filter_var((trim($_POST['email'])), FILTER_SANITIZE_EMAIL);
    $name = filter_var((trim($_POST['name'])));
    $pass = (filter_var((trim($_POST['password']))));
    $color = filter_var((trim($_POST['color'])));
    
    try {
        $username ='root';
        $password='';
        $db='php_NAPYLOVA_lab3';
        $host='localhost';

        $database=new mysqli($host,$username,$password, $db);


        $sql="INSERT INTO `User` (`email`, `password`, `name`, `color`) VALUES('$login','$pass','$name','$color')";
        $res=$database->query($sql);
        if ($res==false){
            $e="Ошибка регистрации";
            throw new ErrorException($e);
        }
        $sql="SELECT * FROM `User` WHERE `email`='$login' AND `password`='$pass'";
        $res=$database->query($sql);
        if ($res==false){
            $e="Вы не зарегистрированы";
            throw new ErrorException($e);
            header('Location: /');
        }
        $user=$res->fetch_assoc();
        
        setcookie('user', $user['name'], time()+1, "/");
        setcookie('color', $user['color'], time()+1, "/");
        $database->close();

        
        $_SESSION['name']= $user['name'];
        $_SESSION['color']= $user['color'];

        header('Location: /');
    }
    catch (\Throwable $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>