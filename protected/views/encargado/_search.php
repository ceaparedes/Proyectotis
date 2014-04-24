<?php
/* @var $this EncargadoController */
/* @var $model Encargado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'en_rut'); ?>
		<?php echo $form->textField($model,'en_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_nombres'); ?>
		<?php echo $form->textField($model,'en_nombres',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_apellidos'); ?>
		<?php echo $form->textField($model,'en_apellidos',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_correo'); ?>
		<?php echo $form->textField($model,'en_correo',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_telefono'); ?>
		<?php echo $form->textField($model,'en_telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->