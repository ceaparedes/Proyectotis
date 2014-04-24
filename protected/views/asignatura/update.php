<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->as_id=>array('view','id'=>$model->as_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asignatura', 'url'=>array('index')),
	array('label'=>'Create Asignatura', 'url'=>array('create')),
	array('label'=>'View Asignatura', 'url'=>array('view', 'id'=>$model->as_id)),
	array('label'=>'Manage Asignatura', 'url'=>array('admin')),
);
?>

<h1>Update Asignatura <?php echo $model->as_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>