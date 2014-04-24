<?php
/* @var $this PostulaPropuestaController */
/* @var $model PostulaPropuesta */

$this->breadcrumbs=array(
	'Postula Propuestas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PostulaPropuesta', 'url'=>array('index')),
	array('label'=>'Create PostulaPropuesta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#postula-propuesta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Postula Propuestas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'postula-propuesta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'so_id',
		'as_id',
		'pr_id',
		'al_rut',
		'so_titulo',
		'so_descripcion',
		/*
		'so_tipo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
