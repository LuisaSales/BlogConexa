<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'post-form',
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Os campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'texto'); ?>
		<?php echo $form->textArea($model, 'texto', array('rows' => 6, 'cols' => 50)); ?>
		<?php echo $form->error($model, 'texto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'imagem'); ?>
		<?php echo $form->textField($model, 'imagem', array('size' => 45, 'maxlength' => 45)); ?>
		<?php echo $form->error($model, 'imagem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'categoria'); ?>
		<?php echo $form->textField($model, 'categoria', array('size' => 60, 'maxlength' => 100)); ?>
		<?php echo $form->error($model, 'categoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Salvar'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->