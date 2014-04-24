<?php
/* @var $this EncargadoController */
/* @var $model Encargado */

$this->breadcrumbs=array(
	'Encargados'=>array('index'),
	$model->en_rut,
);

$this->menu=array(
	array('label'=>'List Encargado', 'url'=>array('index')),
	array('label'=>'Create Encargado', 'url'=>array('create')),
	array('label'=>'Update Encargado', 'url'=>array('update', 'id'=>$model->en_rut)),
	array('label'=>'Delete Encargado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->en_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Encargado', 'url'=>array('admin')),
);
?>

<h1>View Encargado #<?php echo $model->en_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'en_rut',
		'en_nombres',
		'en_apellidos',
		'en_correo',
		'en_telefono',
	),
)); ?>
