<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->idComent,
);

$this->menu=array(
	array('label'=>'List Comentario', 'url'=>array('index')),
	array('label'=>'Create Comentario', 'url'=>array('create')),
	//array('label'=>'Update Comentario', 'url'=>array('update', 'id'=>$model->idComent)),
	//array('label'=>'Delete Comentario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idComent),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<h1>Ver Comentario #<?php echo $model->idComent; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idComent',
		'autor',
		'texto',
		'post_idPost',
	),
)); ?>
