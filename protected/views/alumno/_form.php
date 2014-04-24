<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ca_id'); ?>
		<?php echo $form->textField($model,'ca_id'); ?>
		<?php echo $form->error($model,'ca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_nombres'); ?>
		<?php echo $form->textField($model,'al_nombres',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_apellidos'); ?>
		<?php echo $form->textField($model,'al_apellidos',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_correo'); ?>
		<?php echo $form->textField($model,'al_correo',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono'); ?>
		<?php echo $form->error($model,'al_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_direccion'); ?>
		<?php echo $form->textField($model,'al_direccion',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'al_direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->