<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'as_id'); ?>
		<?php echo $form->textField($model,'as_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ca_id'); ?>
		<?php echo $form->textField($model,'ca_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'as_nombre'); ?>
		<?php echo $form->textField($model,'as_nombre',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->