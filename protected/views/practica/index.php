<?php
/* @var $this PracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Practicas',
);

$this->menu=array(
	array('label'=>'Create Practica', 'url'=>array('create')),
	array('label'=>'Manage Practica', 'url'=>array('admin')),
);
?>

<h1>Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
