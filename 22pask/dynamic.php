<?php 
include_once 'actions.php';
include_once './class/Card.php';
//print_r($files);
$cardArray = [
    [
        'imgSrc' => "./img/image(1).jpg",
        'title' => 'First Title',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, recusandae? ',
        'btnTxt' => 'Go to 1'
    ],
    [
        'imgSrc' => './img/image(3).jpg',
        'title' => 'Boom Title',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, recusandae? ',
        'btnTxt' => 'Go to 2'
    ],
    [
        'imgSrc' => './img/image(5).jpg',
        'title' => 'Secret Floor',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, recusandae? ',
        'btnTxt' => 'Go to 3'
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>gallery</title>
</head>

<body>
    
<h1>Dynamic gallery of cards</h1>
<!-- <pre> -->
    <section class="gallery">


        <?php 
        // sukuriam kortlele kartu su kintamuoju  arba be 
        // new Card('./img/image(2).jpg', 'The new Title', 'bla bla bla', 'See more');
        // $newCardsArray = [
        //     new Card('./img/image(1).jpg', 'Title2', 'bla bla bla 44', 'See more and more'),
        //     new Card('./img/image(3).jpg', 'Title3', 'bla bla bla 54', 'goto'),
        // ]
        foreach($cardArray as $oneCard ) :
            
            new Card($oneCard['imgSrc'], $oneCard['title'], $oneCard['body'], $oneCard['btnTxt']);
        
        endforeach;
        ?>
    </section>

</body>

</html>