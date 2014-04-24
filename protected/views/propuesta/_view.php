<?php
/* @var $this PropuestaController */
/* @var $data Propuesta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pr_id), array('view', 'id'=>$data->pr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_titulo')); ?>:</b>
	<?php echo CHtml::encode($data->pr_titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->pr_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pr_cupos')); ?>:</b>
	<?php echo CHtml::encode($data->pr_cupos); ?>
	<br />


</div>