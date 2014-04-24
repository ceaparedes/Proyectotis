<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->al_rut), array('view', 'id'=>$data->al_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_id')); ?>:</b>
	<?php echo CHtml::encode($data->ca_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->al_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->al_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_correo')); ?>:</b>
	<?php echo CHtml::encode($data->al_correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->al_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->al_direccion); ?>
	<br />


</div>