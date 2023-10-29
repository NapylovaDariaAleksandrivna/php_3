<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2</title>
</head>
<body>
    <?php
    //MySQLi
        define("ServerName","localhost");
        define("DB_Login","root");
        define("DB_Password","");
        define("DB_Name","php_Napylova");

        $connect=new mysqli(ServerName,DB_Login,DB_Password,DB_Name);
        $sql='SELECT
        AL.returned_at as "Return",
        AL.taken_at as "Take",
        CONCAT (r.last_name," ",r.first_name) AS "Reader",
        b.name as "Book"
        FROM log_taking as AL
        left join readers r on AL.reader_id=r.id
        left join books b on AL.book_id=b.id';
        $data=$connect->query($sql);
        
        for ($result=array(); $row=$data->fetch_assoc(); $result[]=$row);
        
        $connect->close();

        foreach ($result as $k=>$v){
            if ($v["Return"]==null){
                echo "<p>$v[Reader] взял $v[Book] $v[Take] и не вернул ее";
            }else{
                echo "<p>$v[Reader] взял $v[Book] $v[Take] и вернул ее $v[Return]</p>";
            }
        }
    ?>
</body>
</html>