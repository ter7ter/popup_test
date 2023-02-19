<?php
/* @var $this TestPopupController */
/* @var $model testPopup */

$this->breadcrumbs=array(
	'Test Popups'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List testPopup', 'url'=>array('index')),
	array('label'=>'Create testPopup', 'url'=>array('create')),
	array('label'=>'Update testPopup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete testPopup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage testPopup', 'url'=>array('admin')),
);
?>

<h1>View testPopup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'text',
		'enable',
		'views',
	),
)); ?>
