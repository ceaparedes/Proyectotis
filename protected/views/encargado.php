<?php
/* @var $this EncargadoController */
/* @var $model Encargado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encargado-encargado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'en_rut'); ?>
		<?php echo $form->textField($model,'en_rut'); ?>
		<?php echo $form->error($model,'en_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_telefono'); ?>
		<?php echo $form->textField($model,'en_telefono'); ?>
		<?php echo $form->error($model,'en_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_nombres'); ?>
		<?php echo $form->textField($model,'en_nombres'); ?>
		<?php echo $form->error($model,'en_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_apellidos'); ?>
		<?php echo $form->textField($model,'en_apellidos'); ?>
		<?php echo $form->error($model,'en_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_correo'); ?>
		<?php echo $form->textField($model,'en_correo'); ?>
		<?php echo $form->error($model,'en_correo'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->