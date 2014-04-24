<?php
/* @var $this PracticaController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->pra_id=>array('view','id'=>$model->pra_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Practica', 'url'=>array('index')),
	array('label'=>'Create Practica', 'url'=>array('create')),
	array('label'=>'View Practica', 'url'=>array('view', 'id'=>$model->pra_id)),
	array('label'=>'Manage Practica', 'url'=>array('admin')),
);
?>

<h1>Update Practica <?php echo $model->pra_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>