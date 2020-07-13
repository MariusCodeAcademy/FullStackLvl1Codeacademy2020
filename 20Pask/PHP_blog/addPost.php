 <?php 
include_once './class/DbClass.php';

// sukuriam klases objekta
$db = new Db();

// vygdom klases metoda prisijungti prie db
$db->connectToDb();


include('./inc/head.php');
include('./inc/navigation.php');
?>


<section class="container">
    <h1 class="display-3 my-5">Add new Post</h1>
    






</section>






<?php include('./inc/footer.php') ?>