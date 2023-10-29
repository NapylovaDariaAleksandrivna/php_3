<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>

<body>
    <?php
    try {
        define("ServerName", "localhost");
        define("DB_Login", "root");
        define("DB_Password", "");
        define("DB_Name", "php_Napylova");

        $connect = new mysqli(ServerName, DB_Login, DB_Password, DB_Name);
        $id = $_GET['id'];
        $sql = "DELETE from log_taking where id=$id";
        $data = $connect->query($sql);
        if ($data === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $connect->error;
        }
        
        $connect->close();        

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
</body>

</html>