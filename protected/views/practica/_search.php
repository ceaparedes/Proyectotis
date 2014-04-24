<?php
/* @var $this PracticaController */
/* @var $model Practica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pra_id'); ?>
		<?php echo $form->textField($model,'pra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'en_rut'); ?>
		<?php echo $form->textField($model,'en_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'as_id'); ?>
		<?php echo $form->textField($model,'as_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'su_rut'); ?>
		<?php echo $form->textField($model,'su_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ev_id'); ?>
		<?php echo $form->textField($model,'ev_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_inicio'); ?>
		<?php echo $form->textField($model,'pra_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_fin'); ?>
		<?php echo $form->textField($model,'pra_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_estado'); ?>
		<?php echo $form->textField($model,'pra_estado',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_descripcion'); ?>
		<?php echo $form->textField($model,'pra_descripcion',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_nota'); ?>
		<?php echo $form->textField($model,'pra_nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_informe'); ?>
		<?php echo $form->textField($model,'pra_informe',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pra_horas'); ?>
		<?php echo $form->textField($model,'pra_horas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->