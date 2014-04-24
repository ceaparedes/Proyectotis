<?php
/* @var $this EncargadoController */
/* @var $data Encargado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->en_rut), array('view', 'id'=>$data->en_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->en_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->en_apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_correo')); ?>:</b>
	<?php echo CHtml::encode($data->en_correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->en_telefono); ?>
	<br />


</div>