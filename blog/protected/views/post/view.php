<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->idPost,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->idPost)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPost),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>View Post #<?php echo $model->idPost; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPost',
		'titulo',
		'texto',
		'autor',
		'data',
		'imagem',
		'usuario_id',
		'categoria',
	),
)); ?>

<div id="comments">
	<?php if ($model->commentCount >= 1) : ?>
	<h3>
		<?php echo $model->commentCount . 'comment(s)'; ?>
	</h3>

	<?php $this->renderPartial('_comments', array(
			'post' => $model,
			'comments' => $model->comentario,
		)); ?>
	<?php endif; ?>

	<h3>Leave a Comment</h3>

	<?php if (Yii::app()->user->hasFlash('commentSubmitted')) : ?>
	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
	</div>
	<?php else : ?>
	<?php $this->renderPartial('/comentario/_form', array(
			'model' => $comentario,
		)); ?>
	<?php endif; ?>

</div>
