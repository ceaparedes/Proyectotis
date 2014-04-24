<?php
/* @var $this PropuestaController */
/* @var $model Propuesta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pr_id'); ?>
		<?php echo $form->textField($model,'pr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_titulo'); ?>
		<?php echo $form->textField($model,'pr_titulo',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_descripcion'); ?>
		<?php echo $form->textField($model,'pr_descripcion',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pr_cupos'); ?>
		<?php echo $form->textField($model,'pr_cupos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->