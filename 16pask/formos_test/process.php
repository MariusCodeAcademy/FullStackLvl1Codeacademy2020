<?php 
    echo '<pre>';
    echo "forma bus abdorojama cia<br>";

    // jei nustatytas ir netuscias GET masyvas tai ji atspausdinti 
    if(isset($_GET) && !empty($_GET)) {
        echo '$_GET <br>';
        //print_r($_GET);

        if(isset($_GET['vardas'])) {
            $VartotojoVardas = $_GET['vardas'];
            echo $VartotojoVardas;
        }
    }

    // pirma uzduotis 
    // » Sukurkite formą su GET metodu, kurioje būtų
    // skaičiuojama dviejų skaičių daugyba.

    // gaunam 1 reiksme
    $num1 = $_GET['skaic1'];

    // gaunam antra reiksme
    $num2 = $_GET['skaic2'];

    // atspausdinit daugyba

    echo 'Dvieju ivestu skaiciu daugyba yra lygi: ' . ($num1 * $num2);


    echo '<br>';
    //nesaugu reikia issivalyti ivesties lauka nuo pavojingu simboliu 
    // echo $_GET['pranesimas']; 
    // saugus html simboliu isvalymas
    echo htmlspecialchars($_GET['pranesimas']);



    echo '</pre>';
?>