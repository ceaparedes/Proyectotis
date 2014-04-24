<?php
/* @var $this EvaluacionController */
/* @var $model Evaluacion */

$this->breadcrumbs=array(
	'Evaluacions'=>array('index'),
	$model->ev_id,
);

$this->menu=array(
	array('label'=>'List Evaluacion', 'url'=>array('index')),
	array('label'=>'Create Evaluacion', 'url'=>array('create')),
	array('label'=>'Update Evaluacion', 'url'=>array('update', 'id'=>$model->ev_id)),
	array('label'=>'Delete Evaluacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ev_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Evaluacion', 'url'=>array('admin')),
);
?>

<h1>View Evaluacion #<?php echo $model->ev_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ev_id',
		'su_rut',
		'pra_id',
		'ev_asistencia',
		'ev_comportamiento',
		'ev_responsabilidad',
		'ev_capacidad',
		'ev_calidad',
		'ev_estructuracion',
		'ev_conocimientos',
		'ev_innovacion',
		'ev_producto',
		'ev_fortalezas',
		'ev_debilidades',
	),
)); ?>
