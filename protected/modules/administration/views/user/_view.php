<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userID),array('view','id'=>$data->userID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rolesID')); ?>:</b>
	<?php echo CHtml::encode($data->rolesID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hint')); ?>:</b>
	<?php echo CHtml::encode($data->hint); ?>
	<br />


</div>