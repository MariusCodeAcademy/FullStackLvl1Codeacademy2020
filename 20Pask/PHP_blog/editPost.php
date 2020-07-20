 <?php 
include_once './class/DbClass.php';

// sukuriam klases objekta
$db = new Db();

// vygdom klases metoda prisijungti prie db
$conn = $db->connectToDb();

include('./inc/head.php');
include('./inc/navigation.php');


// formos apdorojimas
$title = $author = $body = '';
$titleErr = $authorErr = $bodyErr = '';
// $errArr = [];
// ar buvo paspaustas mygtukas siusti
if(isset($_POST['submit'])) {
    // forma buvo issiusta
    echo 'form sent<br>';

    if(!empty($_POST['title'])){
        // siek tiek pravalom irasa ir padarom saugu naudoti SQL usklausose
        $title = mysqli_real_escape_string($conn, $_POST['title']) ;
    } else {
        $titleErr = 'privalomas laukas';
        // array_push($errArr, ['title' => 'laukas privalomas']) 
    }
    if(!empty($_POST['author'])){
        // siek tiek pravalom irasa ir padarom saugu naudoti SQL usklausose
        $author = mysqli_real_escape_string($conn, $_POST['author']) ;
    }else {
        $authorErr = 'Privalomas laukas';
    }
    if(!empty($_POST['body'])){
        // siek tiek pravalom irasa ir padarom saugu naudoti SQL usklausose
        $body = mysqli_real_escape_string($conn, $_POST['body']) ;
    } else {
        $bodyErr = 'Texto laukas negali buti tuscias';
    }

    // pasitikrinam ar visi laukai uzplildyti
    if(!empty($titleErr) && !empty($authorErr) && !empty($bodyErr)) {
        // klaidu nera
        // vygdom uzklausa
        $db->editPost($title, $body, $author);
    }
    

} // submmmit pabaiga


// isvalom get kintamojo reiksme kad butu saugi naudoti sql uzklausoje
if (!empty($_GET['id'])) {
    $postID = mysqli_real_escape_string($conn, $_GET['id']);
} else {
    // get id nenustatytas
    die('postas nerastas');
}
// issitrauksim posta pagal id
$post = $db->getPost($postID);



?>


<section class="container">
    <h1 class="display-4 my-3">Edit Post #12</h1>
    
    <!-- Forma ikelti postui -->
    <form class="w-50" action="editPost.php?id=<?php echo $postID ?>" method="POST">
        <!-- title -->
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name='title' value="<?= $post['title'] ?>">
            <!-- <span class="alert alert-danger "><?php echo $titleErr ?></span> -->
        </div>

        <!-- author -->
        <div class="form-group">
            <label for="">Autorius</label>
            <input type="text" class="form-control" name='author' value='<?php echo $post['author'] ?>'>

        </div>

        <!-- post body -->
        <div class="form-group">
            <label for="">Textas</label>
            <textarea class="form-control" name="body" cols="30" rows="10">
                <?php echo $post['body'] ?>
            </textarea>

        </div>

        <!-- siuntimo mygtuas -->
        <button class="btn btn-lg btn-primary" name='submit' type="submit">Atnaujinti</button>

    </form>
    <!-- /Forma ikelti postui -->






</section>






<?php include('./inc/footer.php') ?>