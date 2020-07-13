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
    
    <!-- Forma ikelti postui -->
    <form class="w-50" action="addPost.php">
        <!-- title -->
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name='title'>
        </div>

        <!-- author -->
        <div class="form-group">
            <label for="">Autorius</label>
            <input type="text" class="form-control" name='author'>
        </div>

        <!-- post body -->
        <div class="form-group">
            <label for="">Textas</label>
            <textarea class="form-control" name="body" cols="30" rows="10"></textarea>
        </div>

        <!-- siuntimo mygtuas -->
        <button class="btn btn-lg btn-primary" name='submit' type="submit">Siusti</button>

    </form>
    <!-- /Forma ikelti postui -->






</section>






<?php include('./inc/footer.php') ?>