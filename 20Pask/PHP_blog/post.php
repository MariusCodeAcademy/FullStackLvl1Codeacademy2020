<?php 
include_once './class/DbClass.php';

// sukuriam klases objekta
$db = new Db();

// vygdom klases metoda prisijungti prie db
$connection = $db->connectToDb();

// metodas kuris sukuria lentele 
// $db->createPostsTable();

// sukurti nauja posta
// $db->addPost('The best post', 'lorem ipsum daug texto', 'John');

include('./inc/head.php');
include('./inc/navigation.php')

?>


<section class="container">

<?php 
echo $db->status; 

// isvalom get kintamojo reiksme kad butu saugi naudoti sql uzklausoje
if (!empty($_GET['id'])) {
    $postID = mysqli_real_escape_string($connection, $_GET['id']);
} else {
    // get id nenustatytas
    die('postas nerastas');
}
// issitrauksim posta pagal id
$post = $db->getPost($postID);

// print_r($post);

?>

<div class="card m-2">
    <div class="card-body">
        <h5 class="card-title display-3 mb-5"><?php echo $post['title'] ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Autorius: <?php echo $post['author'] ?></h6>
        <p class="card-text lead"><?php echo $post['body'] ?></p>
        <a class="card-link btn btn-outline-info" href="editPost.php?id=<?php echo $post['id']; ?>">Edit Post</a>
    </div>
    <div class="card-footer text-muted">Created at <?php echo $post['created_at'] ?></div>
</div>

</section>













<?php include('./inc/footer.php') ?>