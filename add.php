<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2</title>
</head>
<body>
    <?php
        try {
            $username ='root';
            $password='';
            $db='php_NAPYLOVA';
            $host='127.0.0.1';

            $dsn='mysql:host='.$host.';dbname='.$db.';charset=utf8';
            $database=new PDO($dsn,$username,$password);

            $bid=rand( 1,  5);
            $rid=rand( 1,  5);
            $did=rand( 0,1);
            if ($did){
                $did="2023-10-13";
            }else{
                $did="null";
            }

            $sql="INSERT INTO log_taking (id,reader_id,book_id,taken_at,returned_at) VALUES (26,$rid,$bid,'2023-10-06',$did )";
            $results =$database->exec($sql);
            $affectedRowsNumber = $database->exec($sql);
            
            $Id = $database->lastInsertId() ;
            if ($results ==false) {
                echo "<h1>Error</h1>";
            } else {
                echo "<h1>$Id</h1>";
            }
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>
</body>
</html>