<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('db_user','root');
    define('db_password','');
    define('db_host','localhost');
    define('db_name','registration');

    $conn = mysqli_connect (db_host, db_user, db_password, db_name);
    $result = mysqli_query($conn, "Select * from user");
    while ($row = mysqli_fetch_array($result)){
        foreach($row as $key => $value){
            echo "$key = $value <br>\n";
        }
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
</body>
</html>