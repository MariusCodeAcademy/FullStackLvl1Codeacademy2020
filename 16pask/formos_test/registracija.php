<?php 
// echo "labas vakaras";
// patikrinti ar buvo ivestas vardas ir atitinikamai atspausdinti pranesima

if (isset($_POST['username']) && !empty($_POST['username'])) {
    // usrname laukas ivestas ir ne tuscias
    echo htmlspecialchars($_POST['username']);
} else {
    // username laukas neivestas arba tuscias
    echo 'Vartotojo vardas yra privalomas laukas <br>';
    echo '<br>';
}

echo '<br>';

if (isset($_POST['pass1']) && !empty($_POST['pass1'])) {
    // usrname laukas ivestas ir ne tuscias
    echo htmlspecialchars($_POST['pass1']);
    $pass1 = htmlspecialchars($_POST['pass1']);
} else {
    // pass1 laukas neivestas arba tuscias
    echo 'Slaptazodis 1 negali buti tuscias  <br>';
    echo '<br>';
}

// sukuriam pernaudojamo kodo funkcija
function patikrintiIvesti($field, $message) {

    if (isset($_POST[$field]) && !empty($_POST[$field])) {
        // usrname laukas ivestas ir ne tuscias
        echo htmlspecialchars($_POST[$field]);
        return htmlspecialchars($_POST[$field]);
    } else {
        // pass1 laukas neivestas arba tuscias
        echo $message . '<br>';
        echo '<br>';
    }
}

$pass2 = patikrintiIvesti('pass2', 'Slaptazodis 2 negali buti tuscias' );

// atspausdinti kad slaptazodziai sutampa arba nesutampa 
if (!empty($pass1) && !empty($pass2)) {

    if ($pass1 === $pass2) {
    echo "slaptazodziai sutampa";
    } else {
        echo "patikrinkite slaptazodzius ";
    }
}

