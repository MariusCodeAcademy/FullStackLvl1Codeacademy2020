<?php 
    include('class/Vechicle.php');
    include('class/_Moto.php');
    include('class/_Truck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP praktika</title>
</head>
<body>

    <!--   
        susikurti klase vechicle su contstrukcorium
        su savybem wheelCount; fuelType; 

        sukurti vaikine klase kuri praplecia vechicle
        Motocycle
        su papildoma savybe passengerNumber

        sukurri dar viena klase kuri praplecia vechicle 
        Truck
        papildoma savybe loadWeight

        sukurti po viena kiekvienos klases objekta. 

     -->

     <pre>
     <?php 
        $car = new Vechicle(4, "diesel", 1999);

        print_r($car);

        $motoc = new Moto(2, "petrol", 2000, 2);

        print_r($motoc);

        $truck = new Truck(8, 2020, "20T");

        print_r($truck);

        // echo year made is truck
        echo $truck->getYear();

        // $input -> checkValid("reiksme ")

     ?>
     </pre>
    
</body>
</html>