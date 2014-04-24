<?php
/* @var $this PropuestaController */
/* @var $model Propuesta */

$this->breadcrumbs=array(
	'Propuestas'=>array('index'),
	$model->pr_id,
);

$this->menu=array(
	array('label'=>'List Propuesta', 'url'=>array('index')),
	array('label'=>'Create Propuesta', 'url'=>array('create')),
	array('label'=>'Update Propuesta', 'url'=>array('update', 'id'=>$model->pr_id)),
	array('label'=>'Delete Propuesta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pr_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propuesta', 'url'=>array('admin')),
);
?>

<h1>View Propuesta #<?php echo $model->pr_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pr_id',
		'pr_titulo',
		'pr_descripcion',
		'pr_cupos',
	),
)); ?>
