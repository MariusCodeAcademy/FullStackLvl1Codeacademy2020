<?php 
include('connectdb.php');

// SQL uzklausa
$sqlString = 'SELECT * FROM cars';

// mysqli query
$mysqlObject = mysqli_query($conn, $sqlString);

echo '<pre>';

print_r($mysqlObject);
// gaunam ir asociatyvu ir indexuota masyvus
// $data = $mysqlObject->fetch_all(MYSQLI_BOTH);
$data = $mysqlObject->fetch_all(MYSQLI_ASSOC);


print_r($data);






echo '</pre>';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli</title>
</head>
<body>

    <h1>Msqli Pradzia</h1>

    
</body>
</html>



<?php 
// close connection 
$conn->close();
?>