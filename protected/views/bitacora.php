<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacora-bitacora-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bt_id'); ?>
		<?php echo $form->textField($model,'bt_id'); ?>
		<?php echo $form->error($model,'bt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_id'); ?>
		<?php echo $form->textField($model,'pra_id'); ?>
		<?php echo $form->error($model,'pra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bt_descripcion'); ?>
		<?php echo $form->textField($model,'bt_descripcion'); ?>
		<?php echo $form->error($model,'bt_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bt_fecha'); ?>
		<?php echo $form->textField($model,'bt_fecha'); ?>
		<?php echo $form->error($model,'bt_fecha'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->