<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	$model->bt_id=>array('view','id'=>$model->bt_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bitacora', 'url'=>array('index')),
	array('label'=>'Create Bitacora', 'url'=>array('create')),
	array('label'=>'View Bitacora', 'url'=>array('view', 'id'=>$model->bt_id)),
	array('label'=>'Manage Bitacora', 'url'=>array('admin')),
);
?>

<h1>Update Bitacora <?php echo $model->bt_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>