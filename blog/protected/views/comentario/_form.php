<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Espaços com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->