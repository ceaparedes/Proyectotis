<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'so_id'); ?>
		<?php echo $form->textField($model,'so_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'as_id'); ?>
		<?php echo $form->textField($model,'as_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_id'); ?>
		<?php echo $form->textField($model,'pr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'so_titulo'); ?>
		<?php echo $form->textField($model,'so_titulo',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'so_descripcion'); ?>
		<?php echo $form->textField($model,'so_descripcion',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'so_tipo'); ?>
		<?php echo $form->textField($model,'so_tipo',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->