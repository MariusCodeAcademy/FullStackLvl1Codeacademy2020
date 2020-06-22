<?php 

// pasitikriname kas gyvena $_POST masyve
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// sukuriame funkicja isvalyti ivesties laukui nuo pavojingu simboliu ir nereikalingu tarpu
function test_input($data) {
    // nutrinam space tarpelius is abieju pusiu
    $data = trim($data);
    // pavojungu simboliu nukenksminimas
    $data = htmlspecialchars($data);
    return $data;
}

$ivesta = '    vardas ';


$name = $email = $gender = $comment = $website = '';
$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = '';

// pasitikrinsim ar forma jau buvo issiusta (paspausta submit)

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // papausta submit
    // patikriname ar ivestas vardas
    if(empty($_POST['name'])) {
        // laukas tuscias // klaida
        $nameErr = 'Laukas yra privalomas.';
    } else {
        // laukas ivestas issisaugom duomenis
        $name = test_input($_POST['name']);
        // tikrinam ar ivesta tik raides ir tarpai 
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Galimos tik didziosios ir mazosios raides ir tarpai";
        }
    }

    // patikriname ar ivestas pastas 
    if(empty($_POST['email'])) {
        // laukas tuscias // klaida
        $emailErr = 'Laukas yra privalomas.';
    } else {
        // laukas ivestas issisaugom duomenis
        $email = test_input($_POST['email']);
        // tikriname ar tinkamas email formatas
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Patikrinkite el pasto adresa";
        }
    }

    // patikriname ar pasirinkta lytis 
    if(empty($_POST['gender'])) {
        // laukas tuscias // klaida
        $genderErr = 'Pasirinkite viena is varijantu';
    } else {
        // laukas ivestas issisaugom duomenis
        $gender = test_input($_POST['gender']);
    }

    // patikriname ar Svetaine 
    if(empty($_POST['website'])) {
        // neprivalomas laukas
        
    } else {
        // laukas ivestas issisaugom duomenis
        $website = test_input($_POST['website']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Netinkamas svetaines formatas ";
        }
    }
    // komentaro patikrinimas 
    if (!empty($_POST['comment'])) {
        $comment = htmlspecialchars($_POST['comment']);
    }

    // checkbox 
    if(isset($_POST['java']) && !empty($_POST['java']) && $_POST['java'] == 'on') {
        // echo "Java is selected";
    }

}



