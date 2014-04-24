<?php
/* @var $this PropuestaController */
/* @var $model Propuesta */

$this->breadcrumbs=array(
	'Propuestas'=>array('index'),
	$model->pr_id=>array('view','id'=>$model->pr_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propuesta', 'url'=>array('index')),
	array('label'=>'Create Propuesta', 'url'=>array('create')),
	array('label'=>'View Propuesta', 'url'=>array('view', 'id'=>$model->pr_id)),
	array('label'=>'Manage Propuesta', 'url'=>array('admin')),
);
?>

<h1>Update Propuesta <?php echo $model->pr_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>