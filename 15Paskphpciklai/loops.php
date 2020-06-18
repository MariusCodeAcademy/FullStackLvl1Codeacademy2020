<?php 
    $title =  'Php ciklai';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $title ?></h1>


    <?php 
    
    // » Išvesti į ekraną 10 kartų žodį 'Labas';
    // » Išvesti į ekraną skaičius nuo 1 iki 10;
    // » Išvesti į ekraną skaičius nuo 10 iki 1;
    // » Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
    // » Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
    // » Išvesti į ekraną visų masyvo elementų sumą.;

    // » Išvesti į ekraną visų masyvo elementų sandaugą.;

    // » Išvesti į ekraną kas antrą masyvo elementą;
    // » Funkciją, kuri apsuktų masyvo elementus (iš kito galo);


    // echo "Labas <br>";
    // echo "Labas <br>";
    // echo "Labas <br>";
    // echo "Labas <br>";

    // for ciklas PHP
    // » Išvesti į ekraną 10 kartų žodį 'Labas';
    for( $i=1; $i<=10; $i++) {
        echo "Labas $i <br>";
    }
   
    // » Išvesti į ekraną skaičius nuo 1 iki 10;
    echo '<h3>skaiciai nuo 1 iki 10 </h3>';
    for ($i=1; $i<=10; $i++) {
    echo $i . '<br>';
    }

    /*
    $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    */
    
    // » Išvesti į ekraną skaičius nuo 10 iki 1;
    //echo '<h3>skaiciai nuo 10 iki 1 </h3>';
    // for ($i=10; $i>=0; $i--) {
    //     echo $i . '<br>';
    // }

    //echo '<h3>Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100</h3>';
    // » Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
    // for ($i=2; $i<=100; $i=$i+2) {
    //     echo $i . '<br>';
    // }



    // » Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
    // echo '<h3>Išvesti į ekraną visus masyvo elementus (skaičiu masyvas)</h3>';
    // //    index     0  1   2   3   4  5
    // $mano_masyvas =[5, 9, 56, 74, -5, 2];
    // echo '<pre>';
    //  print_r($mano_masyvas);
    // echo '</pre>';


    // jei nenaudojam ciklo 
    // echo '<h3>be ciklo</h3>';

    // echo $mano_masyvas[0] . "<br>";
    // echo $mano_masyvas[1] . "<br>";
    // echo $mano_masyvas[2] . "<br>";
    // echo $mano_masyvas[3] . "<br>";
    // echo $mano_masyvas[4] . "<br>";
    // echo $mano_masyvas[5] . "<br>";

    // echo '<h3>for ciklas</h3>';
    // // gauname masyvo ilgi
    // $mass_ilgis = count($mano_masyvas);
    // // bazinis masyvo reiksmiu atspausdinimas
    // for ($i=0; $i<$mass_ilgis; $i++) {
    //     echo $mano_masyvas[$i] ."<br>";
    //     // echo "index $i " . ($mano_masyvas[$i] + 10) . "  <br>";
    // }


    // » Išvesti į ekraną visų masyvo elementų sumą.;
    // echo '<h3>Išvesti į ekraną visų masyvo elementų sumą</h3>';
    // // susikurti kitnamaji $bendra_suma = 0 ir prie jo prideti kiekviena elementa

    // // susukuriam kintamaji
    // $bendra_suma = 0;
    // // pradenam cikla gaudami kiekviena masyvo reiksme 
    // for ($i=0; $i<$mass_ilgis; $i++) {
    //     // ta reikme sudedam su $bendra_suma ir prilyginam $bendra_suma
    //     $bendra_suma = $bendra_suma + $mano_masyvas[$i];
    // }

    // // pasibaigus ciklui atspausdiname $bendra_suma
    // echo 'bendra suma yra lygi ' . $bendra_suma;

    // //$mano_masyvas =[5, 9, 56, 74, -5, 2];
    //  echo '<h3>Funkciją, kuri apsuktų masyvo elementus (iš kito galo)</h3>';

    // $reversedArr = array_reverse($mano_masyvas);
    
    // // echo '<pre>';
    //     print_r($reversedArr);
    // // echo '</pre>';



    // forEach ==================================================
    $mano_masyvas = [5, 9, 56, 74, -5, 2];

    echo '<h3>paprastas for</h3>';

        // paprastas for cikklas atspausdinti visoms masyvo nariu reiksmems
    for ($i=0; $i<count($mano_masyvas); $i++) {
        echo $mano_masyvas[$i] . '<br>';
    }

    echo '<h3>foreach</h3>';

    // foreach cikklas tam paciam tikslui

    foreach($mano_masyvas as $reiksme ) {
        echo $reiksme . '<br>';
    }


    /*
    » Padidinti kiekviena masyvo elementą vienetu;
    » Išvesti visų masyvo elementų vidurkį;
    » Išvesti automobilis masyvą į ekraną; (dvilypis
    masyvas);
    » Sukurti Fibonacci seką(tai tokia seka, kuomet
    sekantis skaičius yra sudedamas su prieš tai 2
    einančiu.) 1 1 2 3 5 
    */

    echo '<h3>» Padidinti kiekviena masyvo elementą vienetu;</h3>';

    foreach($mano_masyvas as $reiksme) {
        echo $reiksme + 1 . '<br>';
    }

    echo '<h3>» Išvesti visų masyvo elementų vidurkį;</h3>';

    // gauti bendra suma 
    // susikurti bendros sumos kintamaji ir prisilyginti nuliui
    $all_sum = 0;
    foreach($mano_masyvas as $reiksme) {
        // kiekvieno ciklo metu sudeti reiksme su bendra suma ir prilyginti bendrai sumai
        $all_sum = $all_sum + $reiksme;
    }

    // gauti masyvo ilgi
    $mass_ilgis = count($mano_masyvas);

    // padalinti bendra suma is masyvo ilgio atpspausdinti
    $vidurkis = $all_sum / $mass_ilgis;

    echo 'vidurkis yra: ' . $vidurkis;

    // extra sukurti funkcija kuri ima masyva kaip argumenta ir atspausdina ir grazima vidurki


    echo '<h3>» Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);</h3>';

    $car = [
        'Make'          => 'Toyota',
        'Year'          => 2018,
        'Engine'        => 'Petrol',
        'above 3.5T'    => true,
    ];

    // foreach 

    foreach($car as $title => $value ) {
        echo "$title - $value <br>";
    }


    $cars = [
        [
            'Make'          => 'Toyota',
            'Year'          => 2018,
        ],
        [
            'Make'          => 'Bmw',
            'Year'          => 2019,
        ],
        [
            'Make'          => 'Audi',
            'Year'          => 2015,
        ]
    ];

    foreach($cars as $car) {
        foreach($car as $title => $value) {
            echo "$title - $value <br>";
        }
        echo '---------------- <br>';
    }




    
    









    













    ?>


    
</body>
</html>