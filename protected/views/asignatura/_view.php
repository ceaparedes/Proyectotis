<?php
/* @var $this AsignaturaController */
/* @var $data Asignatura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->as_id), array('view', 'id'=>$data->as_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ca_id')); ?>:</b>
	<?php echo CHtml::encode($data->ca_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->as_nombre); ?>
	<br />


</div>