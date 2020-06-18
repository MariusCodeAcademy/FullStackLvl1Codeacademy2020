<?php

$colors2 = ['red', 'violet', 'green', 'purple', "yellow"];


// sukuriam funkcija atspausdinti spalvos eilutei
function echo_color() {
    ?>
        <div class="box" style="background-color: yellow; padding:50px; margin:20px; display: inline-block">Yellow</div>
    <?php
}

function echo_color_value($color) {
    ?>
        <div class="box" style="background-color: <?php echo $color ?>; padding:50px; margin:20px; display: inline-block"><?php echo $color ?></div>
    <?php
}

// paprastas sarasas sugeneruotas is php
function echo_simple_list(){
    echo '<ul class="super_list">';
    echo '<li>One</li>';
    echo '<li>Two</li>';
    echo '<li>three</li>';
    echo '</ul>';
}

//atspausdinti html spalvu masyva
function echo_list_colors($arr){
    echo '<ul class="super_list">';

    // pradeti cikla
    foreach($arr as $color){
        echo "<li style='color:$color'>$color</li>";
    }

    echo '</ul>';
}















