<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ca_id'); ?>
		<?php echo $form->textField($model,'ca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombres'); ?>
		<?php echo $form->textField($model,'al_nombres',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_apellidos'); ?>
		<?php echo $form->textField($model,'al_apellidos',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_correo'); ?>
		<?php echo $form->textField($model,'al_correo',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_telefono'); ?>
		<?php echo $form->textField($model,'al_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_direccion'); ?>
		<?php echo $form->textField($model,'al_direccion',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->