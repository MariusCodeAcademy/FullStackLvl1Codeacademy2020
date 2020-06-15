<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>

    <?php 
    // php kodas 
    
    echo "<h2> PHP veikia </h2>";
    

    // sukurti 2 kintamuosius 
    $num = 15;
    $num2 = 5; 
    // atliekam veiksmus
    $sum = $num + $num2; 
    // atspausdiname rezultata be zymos
    //echo $sum;
    //echo "<br>";

    // sukuriam string tipo kintamuosius 
    $string1 = 'Labas';
    $string2 = 'Vakaras';
    // string tiop kintamuju sujungimas
    //echo $string1 . ' ' . $string2 . "!!!";
    
    // gaunam Notice jei bandom naudoti kintamaji kurio nedeklaravom
    // echo $nera;

    // phpinfo();

    //echo $string1 . ' ' . $string2 . "!!!" . ' ' . $sum;


    $num5 = 17;
    $num6 = 6; 

    // gauti kintamasis 17 padalinti is kintamasis 6 yra lygu xxx
    $dalybaRez = $num5 / $num6;
    $string = 'kintamasis ' . $num5 . ' padalinus is ' . $num6 . ' yra lygu ' . $dalybaRez;
    
    $stringD = "kintamasis {$num5} padalinti is $num6 yra lygu $dalybaRez";

    echo $stringD . '<br>';

    var_dump($stringD);



    
    ?>

    <h3>Suma: <?php echo  $sum ?></h3>

    <h3><?php echo $string  ?></h3>


    
</body>
</html>