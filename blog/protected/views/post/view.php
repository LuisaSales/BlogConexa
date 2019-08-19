<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->idPost,
);

$this->menu=array(
	array('label'=>'Listar Postagem', 'url'=>array('index')),
	array('label'=>'Criar Postagem', 'url'=>array('create')),
	array('label'=>'Editar Postagem', 'url'=>array('update', 'id'=>$model->idPost)),
	//array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPost),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Post: #<?php echo $model->idPost; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		'texto',
		'autor',
		'data',
		'imagem',
		'categoria',
	),
)); ?>

<div id="comments">
	<div id="footer"></div>
	<?php if ($model->commentCount >= 1) : ?>
	<h3>
		<?php echo $model->commentCount . ' comentário(s)';  ?>
	</h3>

	<?php $this->renderPartial('_comments', array(
			'post' => $model,
			'comments' => $model->comentario,
		)); ?>
	<?php endif; ?>
	
	<div id="footer"></div>

	<h3>Deixe um comentário:</h3>

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
