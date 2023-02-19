<?php
/* @var $this TestPopupController */
/* @var $data testPopup */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

    <b>JS URL:</b>
        <a href="<?php echo FULL_PATH_TO_JS.'popup'.$data->id.'.js' ?>">
            <?php echo FULL_PATH_TO_JS.'popup'.$data->id.'.js' ?>
        </a>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enable')); ?>:</b>
	<?php echo CHtml::encode($data->enable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />


</div>