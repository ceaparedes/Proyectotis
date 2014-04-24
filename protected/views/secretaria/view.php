<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	$model->se_rut,
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'Update Secretaria', 'url'=>array('update', 'id'=>$model->se_rut)),
	array('label'=>'Delete Secretaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->se_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>View Secretaria #<?php echo $model->se_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'se_rut',
		'se_nombres',
		'se_apellidos',
	),
)); ?>
