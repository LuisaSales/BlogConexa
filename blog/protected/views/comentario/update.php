<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs=array(
	'Comentarios'=>array('index'),
	$model->idComent=>array('view','id'=>$model->idComent),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentario', 'url'=>array('index')),
	array('label'=>'Create Comentario', 'url'=>array('create')),
	array('label'=>'View Comentario', 'url'=>array('view', 'id'=>$model->idComent)),
	array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<h1>Update Comentario <?php echo $model->idComent; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>