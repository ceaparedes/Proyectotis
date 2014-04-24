<?php
/* @var $this PropuestaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propuestas',
);

$this->menu=array(
	array('label'=>'Create Propuesta', 'url'=>array('create')),
	array('label'=>'Manage Propuesta', 'url'=>array('admin')),
);
?>

<h1>Propuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
