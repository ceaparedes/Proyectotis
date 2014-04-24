<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrera-carrera-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
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
		<?php echo $form->textField($model,'ca_nombre'); ?>
		<?php echo $form->error($model,'ca_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ca_facultad'); ?>
		<?php echo $form->textField($model,'ca_facultad'); ?>
		<?php echo $form->error($model,'ca_facultad'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->