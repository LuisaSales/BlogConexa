<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idComent')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idComent), array('view', 'id'=>$data->idComent)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_idPost')); ?>:</b>
	<?php echo CHtml::encode($data->post_idPost); ?>
	<br />


</div>