<?php 
// pradedam sesija
session_start();
$_SESSION['bandymas'] = 'Ar pavyko';
$_SESSION['Vartotojas123'] = false;


// sunaikinti viena sesijos kintamaji
unset($_SESSION['Vartotjas123']);

// nustatome sausaini
setcookie('kalba', 'lt', time()+3600);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session ir coockies</title>
</head>
<body>
    <h1>session</h1>
    <pre>
    <?php 
    echo '$_SESSION';
    print_r($_SESSION);

    echo '$_COOKIE';
    print_r($_COOKIE);
    
    
    
    ?>
    </pre>

    <?php 
    if($_SESSION['Vartotojas123'] === true) {
   
    ?>
    <!-- slaptas sarasas  -->
    <ul>
        <li>item 1 </li>
        <li>item 7 </li>
        <li>item 6 </li>
        <li>item 5 </li>
    </ul>

    <?php 
    }
    ?>

    
</body>
</html>