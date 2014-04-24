<?php
/* @var $this CarreraController */
/* @var $data Carrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ca_id), array('view', 'id'=>$data->ca_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->ca_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_facultad')); ?>:</b>
	<?php echo CHtml::encode($data->ca_facultad); ?>
	<br />


</div>