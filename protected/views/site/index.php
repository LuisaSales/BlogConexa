<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>NOSSO BLOG <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Aqui você tem acesso as noticias, artigos, dicas e conteúdos do Conexa</p>

<p>Postagens</p>
<ul>
	<li>Título: <code><?php echo __FILE__; ?></code></li>
	<li>Data: <code><?php echo __FILE__; ?></code></li>
	<li>Autor: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>


