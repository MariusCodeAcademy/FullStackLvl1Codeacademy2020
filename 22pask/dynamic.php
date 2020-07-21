<?php 
include_once 'actions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>gallery</title>
</head>

<body>

    <section class="gallery">
        <?php 
        foreach($files as $file) :
        ?>
        <!-- <div class="gallery__item"> -->
            <img class="img-object-fit dog" data-type='dog'  src="./img/<?php echo $file ?>" alt="image of adog">
        <!-- </div> -->
        <?php 
        endforeach;
        ?>
    </section>

</body>

</html>