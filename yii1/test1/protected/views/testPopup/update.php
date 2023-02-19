<?php
/* @var $this TestPopupController */
/* @var $model testPopup */

$this->breadcrumbs=array(
	'Test Popups'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List testPopup', 'url'=>array('index')),
	array('label'=>'Create testPopup', 'url'=>array('create')),
	array('label'=>'View testPopup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage testPopup', 'url'=>array('admin')),
);
?>

<h1>Update testPopup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>