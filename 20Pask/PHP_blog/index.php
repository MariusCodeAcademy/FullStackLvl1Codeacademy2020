<?php 
include_once './class/DbClass.php';

// sukuriam klases objekta
$db = new Db();

// vygdom klases metoda prisijungti prie db
$db->connectToDb();

// metodas kuris sukuria lentele 
// $db->createPostsTable();

// sukurti nauja posta
// $db->addPost('The best post', 'lorem ipsum daug texto', 'John');

include('./inc/head.php');
include('./inc/navigation.php')

?>


<section class="container">
    <h1 class="display-3 my-5">My PHP blog Website</h1>
    <!-- card-container -->
    <div class="card-container d-flex flex-wrap ">

        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">View more</a>
            </div>
        </div>

        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">View More</a>
            </div>
        </div>

    </div><!-- /card-container -->
    
</section>




<?php include('./inc/footer.php') ?>



    