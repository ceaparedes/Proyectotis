<?php
/* @var $this BitacoraController */
/* @var $data Bitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bt_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bt_id), array('view', 'id'=>$data->bt_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_id')); ?>:</b>
	<?php echo CHtml::encode($data->pra_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bt_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->bt_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bt_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->bt_descripcion); ?>
	<br />


</div>