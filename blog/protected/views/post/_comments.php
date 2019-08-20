<?php foreach ($comments as $comment) : ?>

<div class="comment" id="c<?php echo $comment->idComent; ?>">
    <div class="time">
        <!--dar o echo se precisar mostrar data-->
        <?php $comment->data; ?>

    </div>

    <div class="author">

        <?php echo $comment->autor; ?> diz:

    </div>


    <div class="content">

        <?php echo nl2br(CHtml::encode($comment->texto)); ?>

    </div>


    <br \>

</div>

<?php endforeach; ?>