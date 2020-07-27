<?php

class Card 
{
    private $imgSrc;
    private $title;
    private $body; 
    private $btnTxt;

    // susikuriam konstruktoriu 
    public function __construct($img, $ttl, $bd, $btn)
    {
        $this->imgSrc = $img;
        $this->title = $ttl;
        $this->body = $bd;
        $this->btnTxt = $btn;

        $this->makeCard();
    }

    public function makeCard()
    {
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $this->imgSrc ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->title ?></h5>
                <p class="card-text"><?php echo $this->body ?></p>
                <a href="#" class="btn btn-primary"><?php echo $this->btnTxt ?></a>
            </div>
        </div>
        <?php
    }
}