<?php
/* @var $this EncargadoController */
/* @var $model Encargado */

$this->breadcrumbs=array(
	'Encargados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Encargado', 'url'=>array('index')),
	array('label'=>'Manage Encargado', 'url'=>array('admin')),
);
?>

<h1>Create Encargado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>