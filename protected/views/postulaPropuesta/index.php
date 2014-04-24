<?php
/* @var $this PostulaPropuestaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Postula Propuestas',
);

$this->menu=array(
	array('label'=>'Create PostulaPropuesta', 'url'=>array('create')),
	array('label'=>'Manage PostulaPropuesta', 'url'=>array('admin')),
);
?>

<h1>Postula Propuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
