<?php
/* @var $this PropuestaController */
/* @var $model Propuesta */

$this->breadcrumbs=array(
	'Propuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propuesta', 'url'=>array('index')),
	array('label'=>'Manage Propuesta', 'url'=>array('admin')),
);
?>

<h1>Create Propuesta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>