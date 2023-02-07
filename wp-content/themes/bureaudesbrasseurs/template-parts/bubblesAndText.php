<?php
    $id     = $args['id'];
    $title  = $args['title'];
    $text   = $args['text'];
?>
<section class="large bubbleAndText" id="<?= $id ?>">
    <div class="bubbles">
        <?php $defaultBubbleNumber = 4; ?>
        <?php $defaultBubbleSize = 200; //px ?>
        <?php $bubbleShrink = 25; //px ?>

        <?php // chaque bulle fait $bubbleShrink px de moins que la précédente (en partant de $defaultBubbleSize px)
            for ($i = 0; $i < $defaultBubbleNumber; $i++) : ?>
            <?php $bubbleSize = $defaultBubbleSize - ($bubbleShrink * $i); ?>
                <div class="bubble" style="--bubbleWidth: <?= $bubbleSize ?>px; --bubbleHeight: <?= $bubbleSize ?>px;" ></div>
        <?php endfor; ?>

    </div>
    <div class="text">
        <h2><?= $title ?></h2>
        <p><?= $text ?></p>
    </div>
</section>