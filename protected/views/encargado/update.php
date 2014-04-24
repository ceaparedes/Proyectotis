<?php
/* @var $this EncargadoController */
/* @var $model Encargado */

$this->breadcrumbs=array(
	'Encargados'=>array('index'),
	$model->en_rut=>array('view','id'=>$model->en_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Encargado', 'url'=>array('index')),
	array('label'=>'Create Encargado', 'url'=>array('create')),
	array('label'=>'View Encargado', 'url'=>array('view', 'id'=>$model->en_rut)),
	array('label'=>'Manage Encargado', 'url'=>array('admin')),
);
?>

<h1>Update Encargado <?php echo $model->en_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>