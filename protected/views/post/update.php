<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->idPost=>array('view','id'=>$model->idPost),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Postagem', 'url'=>array('index')),
	array('label'=>'Criar Postagem', 'url'=>array('create')),
	array('label'=>'Ver Postagem', 'url'=>array('view', 'id'=>$model->idPost)),
	//array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Editar Post: #<?php echo $model->idPost; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>