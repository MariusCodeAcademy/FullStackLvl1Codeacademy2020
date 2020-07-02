<?php
// prisijungiam prie db
include('connectdb.php');

// irasyti nauja irasa i duomenu baze ir gauti feedback ===========================
// $sql = '
//     INSERT INTO cars(brand, model, engineVolume, year)
//     VALUES
//     ("Suzuki", "Swift", 1.2, 2000);
//     ';

// vygdysim trynima  ===============================================

// $sql = 'DELETE FROM `cars` WHERE `id` = 8';







// vygdysim uzklausa OOP budu 
if($conn->query($sql) == TRUE) {
    echo '<br>uzklausa sekminga';
} else {
    echo '<br>ivyko klaida';
}








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MysqlOOP</title>
</head>
<body>
    <h1>Mysqli OOP </h1>
    <a href="index.php">Main</a>
    
</body>
</html>