<?php
/* @var $this TestPopupController */
/* @var $model testPopup */

$this->breadcrumbs=array(
	'Test Popups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List testPopup', 'url'=>array('index')),
	array('label'=>'Manage testPopup', 'url'=>array('admin')),
);
?>

<h1>Create testPopup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>