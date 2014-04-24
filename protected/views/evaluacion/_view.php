<?php
/* @var $this EvaluacionController */
/* @var $data Evaluacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ev_id), array('view', 'id'=>$data->ev_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('su_rut')); ?>:</b>
	<?php echo CHtml::encode($data->su_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_id')); ?>:</b>
	<?php echo CHtml::encode($data->pra_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_asistencia')); ?>:</b>
	<?php echo CHtml::encode($data->ev_asistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_comportamiento')); ?>:</b>
	<?php echo CHtml::encode($data->ev_comportamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_responsabilidad')); ?>:</b>
	<?php echo CHtml::encode($data->ev_responsabilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_capacidad')); ?>:</b>
	<?php echo CHtml::encode($data->ev_capacidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_calidad')); ?>:</b>
	<?php echo CHtml::encode($data->ev_calidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_estructuracion')); ?>:</b>
	<?php echo CHtml::encode($data->ev_estructuracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_conocimientos')); ?>:</b>
	<?php echo CHtml::encode($data->ev_conocimientos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_innovacion')); ?>:</b>
	<?php echo CHtml::encode($data->ev_innovacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_producto')); ?>:</b>
	<?php echo CHtml::encode($data->ev_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_fortalezas')); ?>:</b>
	<?php echo CHtml::encode($data->ev_fortalezas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_debilidades')); ?>:</b>
	<?php echo CHtml::encode($data->ev_debilidades); ?>
	<br />

	*/ ?>

</div>