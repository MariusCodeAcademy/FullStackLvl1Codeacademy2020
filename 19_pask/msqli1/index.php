<?php 
include('connectdb.php');

// GET masyvas is URL
if (isset($_GET['orderBy']) && !empty($_GET['orderBy'])) {
    $orderBy = htmlspecialchars($_GET['orderBy']) ;

    // print_r($_GET);
}





// SQL uzklausa
// gaunam lenteles duomenis
// $sqlString = 'SELECT * FROM cars';

// norim isrikiuoti pagal metus 
$sqlString = 'SELECT * FROM cars ORDER BY model DESC';


// isrikiuojam pagal $_get masyvo reiksme jei tokia yra
if(isset($orderBy)){
    $sqlString = "SELECT * FROM cars ORDER BY $orderBy DESC";
}
// $sqlString = 'SELECT * FROM cars ORDER BY model DESC';




// istraukti duomenis kur metai yra 1999
// $sqlString = 'SELECT * FROM cars WHERE `year` < 2000';

// mysqli query
$mysqlObject = mysqli_query($conn, $sqlString);

echo '<pre>';

//print_r($mysqlObject);
// gaunam ir asociatyvu ir indexuota masyvus
// $data = $mysqlObject->fetch_all(MYSQLI_BOTH);
$data = $mysqlObject->fetch_all(MYSQLI_ASSOC);

//print_r($data);

// Duomenu irasymas i lentele 
// pasirasom uzklausa
// $sqlString = "
//     INSERT INTO cars(`brand`, `model`, `engineVolume`, `year`)
//     VALUES
//     ('Opel', 'Astra', 2.0, 1998),
//     ('Opel', 'Zefyra', 2.4, 1999);
// ";
// // vygdom uzklausa
// $mysqliObj = mysqli_query($conn, $sqlString);

// print_r($mysqliObj);



//  pakeisti metus BMW kurio id 4 ================================
// $sqlString = "
//     UPDATE `cars` 
//     SET `year` = 2010
//     WHERE `id` = 4
//     LIMIT 1
// ";

// atliekam uzklausa
// $queryObj = mysqli_query($conn, $sqlString);







echo '</pre>';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Msqli Pradzia</h1>
    <a href="mysqloop.php">OOP</a>

    <table>
        <thead>
            <tr>
                <th><a href="?orderBy=id"> ID </a></th>
                <th>Brand</th>
                <th>Model</th>
                <th> <a href="?orderBy=engineVolume">Engine</a> </th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php 

                foreach($data as $car) {
                    echo "
                    <tr>
                        <td>{$car['id']}</td>
                        <td>{$car['brand']}</td>
                        <td>{$car['model']}</td>
                        <td>{$car['engineVolume']}</td>
                        <td>{$car['year']}</td>
                    </tr>
                    ";
                }
            
            ?>
            

        </tbody>
    </table>

    



    
</body>
</html>



<?php 
// close connection 
$conn->close();
?>