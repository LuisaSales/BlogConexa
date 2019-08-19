<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posts',
);

$this->menu=array(
	array('label'=>'Criar Postagem', 'url'=>array('create')),
	//array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Posts</h1>

<?php 

if(!empty($_GET['categoria'])): 
?>

<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['categoria']); ?></i></h1>


<?php endif; ?>
 
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
)); 
?>
