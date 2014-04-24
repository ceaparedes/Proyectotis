<?php
/* @var $this PracticaController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Practica', 'url'=>array('index')),
	array('label'=>'Manage Practica', 'url'=>array('admin')),
);
?>

<h1>Create Practica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>