<?php foreach ($comments as $comment) : ?>

<div class="comment" id="c<?php echo $comment->idComent; ?>">


    <div class="author">

        <?php echo $comment->autor; ?> diz:

    </div>


    <div class="content">

        <?php echo nl2br(CHtml::encode($comment->texto)); ?>

    </div>

    <div class="time">

        <?php $comment->data; ?>
        <br>

    </div>


</div><!-- comment -->

<?php endforeach; ?>