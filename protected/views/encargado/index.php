<?php
/* @var $this EncargadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encargados',
);

$this->menu=array(
	array('label'=>'Create Encargado', 'url'=>array('create')),
	array('label'=>'Manage Encargado', 'url'=>array('admin')),
);
?>

<h1>Encargados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
