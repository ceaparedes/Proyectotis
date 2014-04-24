<?php
/* @var $this PostulaPropuestaController */
/* @var $data PostulaPropuesta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('so_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->so_id), array('view', 'id'=>$data->so_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_id')); ?>:</b>
	<?php echo CHtml::encode($data->as_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_id')); ?>:</b>
	<?php echo CHtml::encode($data->pr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::encode($data->al_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('so_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->so_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('so_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->so_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('so_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->so_tipo); ?>
	<br />


</div>