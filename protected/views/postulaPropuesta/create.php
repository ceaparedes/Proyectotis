<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */

$this->breadcrumbs=array(
	'Postula Propuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostulaPropuesta', 'url'=>array('index')),
	array('label'=>'Manage PostulaPropuesta', 'url'=>array('admin')),
);
?>

<h1>Create PostulaPropuesta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>