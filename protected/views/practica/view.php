<?php
/* @var $this PracticaController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->pra_id,
);

$this->menu=array(
	array('label'=>'List Practica', 'url'=>array('index')),
	array('label'=>'Create Practica', 'url'=>array('create')),
	array('label'=>'Update Practica', 'url'=>array('update', 'id'=>$model->pra_id)),
	array('label'=>'Delete Practica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pra_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Practica', 'url'=>array('admin')),
);
?>

<h1>View Practica #<?php echo $model->pra_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pra_id',
		'en_rut',
		'as_id',
		'su_rut',
		'al_rut',
		'ev_id',
		'pra_inicio',
		'pra_fin',
		'pra_estado',
		'pra_descripcion',
		'pra_nota',
		'pra_informe',
		'pra_horas',
	),
)); ?>
