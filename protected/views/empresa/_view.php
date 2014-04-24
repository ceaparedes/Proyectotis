<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_razon')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emp_razon), array('view', 'id'=>$data->emp_razon)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->emp_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_rubro')); ?>:</b>
	<?php echo CHtml::encode($data->emp_rubro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_direccion')); ?>:</b>
	<?php echo CHtml::encode($data->emp_direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->emp_ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->emp_telefono); ?>
	<br />


</div>