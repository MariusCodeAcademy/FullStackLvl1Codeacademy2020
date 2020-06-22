<?php 
    echo '<pre>';
    echo "forma bus abdorojama cia<br>";

    // jei nustatytas ir netuscias GET masyvas tai ji atspausdinti 
    if(isset($_GET) && !empty($_GET)) {
        echo '$_GET <br>';
        print_r($_GET);

        if(isset($_GET['vardas'])) {
            $VartotojoVardas = $_GET['vardas'];
            echo $VartotojoVardas;
        }
    }

    echo '</pre>';
?>