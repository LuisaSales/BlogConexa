<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Postagens', 'url'=>array('index')),
	//array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Criar Postagem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>