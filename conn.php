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

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }
    ?>
</body>
</html>