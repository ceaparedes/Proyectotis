<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_id'); ?>
		<?php echo $form->textField($model,'ev_id'); ?>
		<?php echo $form->error($model,'ev_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'su_rut'); ?>
		<?php echo $form->textField($model,'su_rut',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'su_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pra_id'); ?>
		<?php echo $form->textField($model,'pra_id'); ?>
		<?php echo $form->error($model,'pra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_asistencia'); ?>
		<?php echo $form->textField($model,'ev_asistencia'); ?>
		<?php echo $form->error($model,'ev_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_comportamiento'); ?>
		<?php echo $form->textField($model,'ev_comportamiento'); ?>
		<?php echo $form->error($model,'ev_comportamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_responsabilidad'); ?>
		<?php echo $form->textField($model,'ev_responsabilidad'); ?>
		<?php echo $form->error($model,'ev_responsabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_capacidad'); ?>
		<?php echo $form->textField($model,'ev_capacidad'); ?>
		<?php echo $form->error($model,'ev_capacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_calidad'); ?>
		<?php echo $form->textField($model,'ev_calidad'); ?>
		<?php echo $form->error($model,'ev_calidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_estructuracion'); ?>
		<?php echo $form->textField($model,'ev_estructuracion'); ?>
		<?php echo $form->error($model,'ev_estructuracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_conocimientos'); ?>
		<?php echo $form->textField($model,'ev_conocimientos'); ?>
		<?php echo $form->error($model,'ev_conocimientos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_innovacion'); ?>
		<?php echo $form->textField($model,'ev_innovacion'); ?>
		<?php echo $form->error($model,'ev_innovacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_producto'); ?>
		<?php echo $form->textField($model,'ev_producto'); ?>
		<?php echo $form->error($model,'ev_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_fortalezas'); ?>
		<?php echo $form->textField($model,'ev_fortalezas',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ev_fortalezas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ev_debilidades'); ?>
		<?php echo $form->textField($model,'ev_debilidades',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ev_debilidades'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->