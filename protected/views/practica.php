<?php
/* @var $this PracticaController */
/* @var $model Practica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'practica-practica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_id'); ?>
		<?php echo $form->textField($model,'pra_id'); ?>
		<?php echo $form->error($model,'pra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'en_rut'); ?>
		<?php echo $form->textField($model,'en_rut'); ?>
		<?php echo $form->error($model,'en_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'as_id'); ?>
		<?php echo $form->textField($model,'as_id'); ?>
		<?php echo $form->error($model,'as_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'su_rut'); ?>
		<?php echo $form->textField($model,'su_rut'); ?>
		<?php echo $form->error($model,'su_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut'); ?>
		<?php echo $form->error($model,'al_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_id'); ?>
		<?php echo $form->textField($model,'ev_id'); ?>
		<?php echo $form->error($model,'ev_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_nota'); ?>
		<?php echo $form->textField($model,'pra_nota'); ?>
		<?php echo $form->error($model,'pra_nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_estado'); ?>
		<?php echo $form->textField($model,'pra_estado'); ?>
		<?php echo $form->error($model,'pra_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_descripcion'); ?>
		<?php echo $form->textField($model,'pra_descripcion'); ?>
		<?php echo $form->error($model,'pra_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_informe'); ?>
		<?php echo $form->textField($model,'pra_informe'); ?>
		<?php echo $form->error($model,'pra_informe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_inicio'); ?>
		<?php echo $form->textField($model,'pra_inicio'); ?>
		<?php echo $form->error($model,'pra_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_fin'); ?>
		<?php echo $form->textField($model,'pra_fin'); ?>
		<?php echo $form->error($model,'pra_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_horas'); ?>
		<?php echo $form->textField($model,'pra_horas'); ?>
		<?php echo $form->error($model,'pra_horas'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->