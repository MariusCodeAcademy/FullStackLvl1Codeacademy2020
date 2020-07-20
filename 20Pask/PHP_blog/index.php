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
    
    
    <?php 
    // gaunu postus
    $postsArray = $db->getPosts();

    //  print_r($postsArray);
    

    // suksim cikla per gautus duomenis ir atvaizduosim korteles
    foreach($postsArray as $post) :   ?>
    
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post['title'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['author'] ?></h6>
                <p class="card-text"><?php echo $post['body'] ?></p>
            </div>
            <div class="card-footer">
                <a class="d-block" href="post.php?id=<?php echo $post['id'] ?>" class="card-link">View more</a>
                <p class="text-muted"><?php echo $post['created_at'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    </div><!-- /card-container -->
    
</section>




<?php include('./inc/footer.php') ?>



    