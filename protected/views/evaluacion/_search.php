<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ev_id'); ?>
		<?php echo $form->textField($model,'ev_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'su_rut'); ?>
		<?php echo $form->textField($model,'su_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_id'); ?>
		<?php echo $form->textField($model,'pra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_asistencia'); ?>
		<?php echo $form->textField($model,'ev_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_comportamiento'); ?>
		<?php echo $form->textField($model,'ev_comportamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_responsabilidad'); ?>
		<?php echo $form->textField($model,'ev_responsabilidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_capacidad'); ?>
		<?php echo $form->textField($model,'ev_capacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_calidad'); ?>
		<?php echo $form->textField($model,'ev_calidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_estructuracion'); ?>
		<?php echo $form->textField($model,'ev_estructuracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_conocimientos'); ?>
		<?php echo $form->textField($model,'ev_conocimientos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_innovacion'); ?>
		<?php echo $form->textField($model,'ev_innovacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_producto'); ?>
		<?php echo $form->textField($model,'ev_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_fortalezas'); ?>
		<?php echo $form->textField($model,'ev_fortalezas',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_debilidades'); ?>
		<?php echo $form->textField($model,'ev_debilidades',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->