<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */

$this->breadcrumbs=array(
	'Postula Propuestas'=>array('index'),
	$model->so_id,
);

$this->menu=array(
	array('label'=>'List PostulaPropuesta', 'url'=>array('index')),
	array('label'=>'Create PostulaPropuesta', 'url'=>array('create')),
	array('label'=>'Update PostulaPropuesta', 'url'=>array('update', 'id'=>$model->so_id)),
	array('label'=>'Delete PostulaPropuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->so_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostulaPropuesta', 'url'=>array('admin')),
);
?>

<h1>View PostulaPropuesta #<?php echo $model->so_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'so_id',
		'as_id',
		'pr_id',
		'al_rut',
		'so_titulo',
		'so_descripcion',
		'so_tipo',
	),
)); ?>
