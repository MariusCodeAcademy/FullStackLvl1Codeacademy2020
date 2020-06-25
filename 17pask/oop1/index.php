<?php 
include('class/fruitClass.php');
include('class/customerClass.php');
include('class/personClass.php');
include('class/_studentClass.php');

session_start();
$_SESSION['admin'] = true;

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
    // $customer1 = new Customer("John", "Doe", '123456');

    // print_r($customer1);

    // Enkapsuliacija 

    // $person1 = new Person('Jonas', 'Bambuzas', 'Pardavejas', '1234');

    // // bandymas gauti reiksmes tiesiogiai
    // echo $person1->name;
    // // echo $person1->surname;
    // // echo $person1->ocupation;
    // // echo $person1->pinCode;

    // print_r($person1);

    // // pakeiciam pin su metodu
    // $person1->setNewPin('9874');

    // print_r($person1);


    // Paveldimumas Inheritance 
    // Student clase praplecia Person clase

    $stud1 = new Student('Serbentas', 'Bordiuras', "KTU", 2);

    print_r($stud1);

    $stud1->setSurnameStud('Morkauskas');

    print_r($stud1);







    
    
    ?>

    </pre>


    
</body>
</html>