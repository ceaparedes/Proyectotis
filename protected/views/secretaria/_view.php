<?php
/* @var $this SecretariaController */
/* @var $data Secretaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->se_rut), array('view', 'id'=>$data->se_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->se_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('se_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->se_apellidos); ?>
	<br />


</div>