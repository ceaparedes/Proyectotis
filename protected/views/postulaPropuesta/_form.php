<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'postula-propuesta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'so_id'); ?>
		<?php echo $form->textField($model,'so_id'); ?>
		<?php echo $form->error($model,'so_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'as_id'); ?>
		<?php echo $form->textField($model,'as_id'); ?>
		<?php echo $form->error($model,'as_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pr_id'); ?>
		<?php echo $form->textField($model,'pr_id'); ?>
		<?php echo $form->error($model,'pr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'so_titulo'); ?>
		<?php echo $form->textField($model,'so_titulo',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'so_titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'so_descripcion'); ?>
		<?php echo $form->textField($model,'so_descripcion',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'so_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'so_tipo'); ?>
		<?php echo $form->textField($model,'so_tipo',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'so_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->