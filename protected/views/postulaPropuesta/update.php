<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */

$this->breadcrumbs=array(
	'Postula Propuestas'=>array('index'),
	$model->so_id=>array('view','id'=>$model->so_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostulaPropuesta', 'url'=>array('index')),
	array('label'=>'Create PostulaPropuesta', 'url'=>array('create')),
	array('label'=>'View PostulaPropuesta', 'url'=>array('view', 'id'=>$model->so_id)),
	array('label'=>'Manage PostulaPropuesta', 'url'=>array('admin')),
);
?>

<h1>Update PostulaPropuesta <?php echo $model->so_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>