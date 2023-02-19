<?php
/* @var $this TestPopupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Test Popups',
);

$this->menu=array(
	array('label'=>'Create testPopup', 'url'=>array('create')),
	array('label'=>'Manage testPopup', 'url'=>array('admin')),
);
?>

<h1>Test Popups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
