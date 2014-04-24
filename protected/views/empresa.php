<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_razon'); ?>
		<?php echo $form->textField($model,'emp_razon'); ?>
		<?php echo $form->error($model,'emp_razon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_telefono'); ?>
		<?php echo $form->textField($model,'emp_telefono'); ?>
		<?php echo $form->error($model,'emp_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_nombre'); ?>
		<?php echo $form->textField($model,'emp_nombre'); ?>
		<?php echo $form->error($model,'emp_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_rubro'); ?>
		<?php echo $form->textField($model,'emp_rubro'); ?>
		<?php echo $form->error($model,'emp_rubro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_direccion'); ?>
		<?php echo $form->textField($model,'emp_direccion'); ?>
		<?php echo $form->error($model,'emp_direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_ciudad'); ?>
		<?php echo $form->textField($model,'emp_ciudad'); ?>
		<?php echo $form->error($model,'emp_ciudad'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->