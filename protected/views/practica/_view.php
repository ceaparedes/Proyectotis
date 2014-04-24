<?php
/* @var $this PracticaController */
/* @var $data Practica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pra_id), array('view', 'id'=>$data->pra_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_rut')); ?>:</b>
	<?php echo CHtml::encode($data->en_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('as_id')); ?>:</b>
	<?php echo CHtml::encode($data->as_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('su_rut')); ?>:</b>
	<?php echo CHtml::encode($data->su_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('al_rut')); ?>:</b>
	<?php echo CHtml::encode($data->al_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_id')); ?>:</b>
	<?php echo CHtml::encode($data->ev_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->pra_inicio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_fin')); ?>:</b>
	<?php echo CHtml::encode($data->pra_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_estado')); ?>:</b>
	<?php echo CHtml::encode($data->pra_estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->pra_descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_nota')); ?>:</b>
	<?php echo CHtml::encode($data->pra_nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_informe')); ?>:</b>
	<?php echo CHtml::encode($data->pra_informe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pra_horas')); ?>:</b>
	<?php echo CHtml::encode($data->pra_horas); ?>
	<br />

	*/ ?>

</div>