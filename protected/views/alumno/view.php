<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->al_rut,
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'Update Alumno', 'url'=>array('update', 'id'=>$model->al_rut)),
	array('label'=>'Delete Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->al_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>View Alumno #<?php echo $model->al_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'al_rut',
		'ca_id',
		'al_nombres',
		'al_apellidos',
		'al_correo',
		'al_telefono',
		'al_direccion',
	),
)); ?>
