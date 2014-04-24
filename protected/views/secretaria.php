<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secretaria-secretaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'se_rut'); ?>
		<?php echo $form->textField($model,'se_rut'); ?>
		<?php echo $form->error($model,'se_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'se_nombres'); ?>
		<?php echo $form->textField($model,'se_nombres'); ?>
		<?php echo $form->error($model,'se_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'se_apellidos'); ?>
		<?php echo $form->textField($model,'se_apellidos'); ?>
		<?php echo $form->error($model,'se_apellidos'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->