<?php
/* @var $this RolesController */
/* @var $data Roles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rolesID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rolesID), array('view', 'id'=>$data->rolesID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rolesName')); ?>:</b>
	<?php echo CHtml::encode($data->rolesName); ?>
	<br />


</div>