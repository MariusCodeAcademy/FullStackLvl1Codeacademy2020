<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';

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

    if (empty($_POST['comment'])) {
        
    } else {
        $comment = htmlspecialchars($comment);
        echo "comentaras : $comment";
    }




}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Practice form validation</title>
</head>
<body>

    <h1>Form validation practice</h1>

    <form action="index.php" method="POST">
        Name*: <input class="db <?php echo $nameErr ? 'error-bd' : ''; ?> " type="text" name="name" value="<?php echo $name?>" >
        <!-- atvaizduojame klaida jei tokia yra  -->
        <p class="err"><?php echo $nameErr ?></p>

        E-mail*: <input class="db <?php echo $emailErr ? 'error-bd' : ''; ?> " type="text" name="email" value="<?php echo $email?>" >
         <!-- atvaizduojame klaida jei tokia yra  -->
        <p class="err"><?php echo $emailErr ?></p>

        Website: <input class="db <?php echo $websiteErr ? 'error-bd' : ''; ?> " type="text" name="website" value='<?php echo $website?>'>
         <!-- atvaizduojame klaida jei tokia yra  -->
         <p class="err"><?php echo $websiteErr ?></p>

        Comment: <textarea class="db" name="comment" rows="5" cols="40"> <?php echo $comment ?> </textarea>

        <!-- radio buttons -->

        Gender*: 
        <input type="radio" name="gender" value='female'> Female
        <input type="radio" name="gender" value='male'> Male
        <input type="radio" name="gender" value='other'> Other
        <p class="err"><?php echo $genderErr ?></p>


        <button class="db" type="submit">Send</button>
    </form>
    
</body>
</html>