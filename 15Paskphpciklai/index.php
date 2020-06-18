<?php 
    $title = 'Main page';
    include('components/functions.php');
    include('components/header.php');
?>

    <section class="main">
        <article>
            <h2 class="title">Some title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, repellat.</p>
        </article>
        <article>
            <h2 class="title">Some other title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, repellat.</p>
        </article>
        <article>
            <h2 class="title">different title</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, repellat.</p>
        </article>
    </section>

    <section>
        <?php include('inc/list.php') ?>
        
    </section>

    <section>
        <!-- <div class="box" style="background-color: yellow; padding:50px; margin:20px; display: inline-block">Yellow</div> -->
        <?php 
        echo_color();
        echo_color_value('tomato');
        echo_simple_list();
        echo_list_colors($colors2);
        ?>
    </section>

<?php 
    include('components/footer.php')
?>