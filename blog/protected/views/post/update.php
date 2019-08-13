<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->idPost=>array('view','id'=>$model->idPost),
	'Update',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->idPost)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Update Post <?php echo $model->idPost; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>