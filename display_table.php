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
    include 'conn.php';

    echo "<table border='1'><tr><th>First Name</th><th>Last Name</th>";
    echo "<th>E-mail</th><th>Password</th><th>Registration Date</th></tr>";

    $result = mysqli_query($conn, "select * from user");
    while($row = sqli_fetch_row($result)){
        echo "<tr>";
        foreach ($row as $cell)
            echo "<td>$cell</td>";
        echo "</tr>";
    }

    mysqli_free_result($result);
    mysqli_close($dbc);
    ?>
</body>
</html>