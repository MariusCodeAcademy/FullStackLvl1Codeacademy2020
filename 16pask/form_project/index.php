<?php 
// jei failas nerastaas kodas nevygdomas toliau 
    require('functions.php');
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
        Name*: 
        <input class="db 
        <?php echo $nameErr ? 'error-bd' : ''; ?>" 
        type="text" 
        name="name" 
        value="<?php echo $name?>" >
        <!-- atvaizduojame klaida jei tokia yra  -->
        <p class="err"><?php echo $nameErr ?></p>

        E-mail*: <input class="db <?php echo $emailErr ? 'error-bd' : ''; ?> " type="text" name="email" value="<?php echo $email?>" >
         <!-- atvaizduojame klaida jei tokia yra  -->
        <p class="err"><?php echo $emailErr ?></p>

        Website: <input class="db <?php echo $websiteErr ? 'error-bd' : ''; ?> " type="text" name="website" value='<?php echo $website?>'>
         <!-- atvaizduojame klaida jei tokia yra  -->
         <p class="err"><?php echo $websiteErr ?></p>

        Comment: <textarea class="db" name="comment" rows="5" cols="40" value=''> <?php echo $comment ?> </textarea>

        <!-- radio buttons -->

        Gender*: 
        <input type="radio" name="gender" value='female' <?php echo $gender === 'female' ? 'checked' : '' ?> > Female
        <input type="radio" name="gender" value='male' <?php echo $gender === 'male' ? 'checked' : '' ?> > Male
        <input type="radio" name="gender" value='other' <?php echo $gender === 'other' ? 'checked' : '' ?> > Other
        <p class="err"><?php echo $genderErr ?></p>
        <br>

        Programavimo kalbos: 
        <input class="" type="checkbox" name="js" id='js'> 
        <label for="js">Javascript</label>
        <input class="" type="checkbox" name="php"> PHP
        <input type="checkbox" name="cpp" > C++
        <input type="checkbox" name="java" > Java

        <button class="db" type="submit">Send</button>
    </form>
    
</body>
</html>