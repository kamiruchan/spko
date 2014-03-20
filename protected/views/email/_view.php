<?php
/* @var $this EmailController */
/* @var $data Email */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emailID), array('view', 'id'=>$data->emailID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAdd')); ?>:</b>
	<?php echo CHtml::encode($data->emailAdd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />


</div>