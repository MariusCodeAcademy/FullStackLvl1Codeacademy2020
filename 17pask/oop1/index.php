<?php 
include('fruitClass.php');
include('customerClass.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1</title>
</head>
<body>
    <h1>OOP1</h1>

    <pre>
    <?php 
    // // sukuriam pirma klases objekta
    // $apple1 = new Fruit();
    // // atspausdinam
    // print_r($apple1);

    // // naudojame klases metoda kad ivesti varda
    // $apple1->set_name('oboulys');

    // // atspausdinam
    // print_r($apple1);

    // // tiesioginis public savybiu pakeitimas (ne best way)
    // $apple1->color = 'raudona';

    // // atspausdinam
    // print_r($apple1);

    // $banana = new Fruit();
    // $banana->set_name("bananas");
    // $banana->color = 'Geltona';

    // // atspausdinam
    // print_r($banana);

    // // gauti objekto duomenis - spalva
    // // paprastas budas veikia kai public
    // echo $banana->color;

    // // getter budas 
    // echo $banana->get_color();

    // Customer klase su konstruktorium 

    // sukuriam nauja objekta ir uzpildome konstruktoriaus pagalba
    $customer1 = new Customer("John", "Doe", '123456');

    print_r($customer1);



    
    
    ?>

    </pre>


    
</body>
</html>