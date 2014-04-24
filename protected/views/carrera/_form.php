<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrera-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ca_id'); ?>
		<?php echo $form->textField($model,'ca_id'); ?>
		<?php echo $form->error($model,'ca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ca_nombre'); ?>
		<?php echo $form->textField($model,'ca_nombre',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ca_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ca_facultad'); ?>
		<?php echo $form->textField($model,'ca_facultad',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ca_facultad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->