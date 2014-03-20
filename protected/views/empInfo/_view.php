<?php
/* @var $this EmpInfoController */
/* @var $data EmpInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('empInfoID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->empInfoID), array('view', 'id'=>$data->empInfoID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empOrNot')); ?>:</b>
	<?php echo CHtml::encode($data->empOrNot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplaceName')); ?>:</b>
	<?php echo CHtml::encode($data->workplaceName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplaceAdd')); ?>:</b>
	<?php echo CHtml::encode($data->workplaceAdd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currJobRelToCourse')); ?>:</b>
	<?php echo CHtml::encode($data->currJobRelToCourse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unemploymentReason')); ?>:</b>
	<?php echo CHtml::encode($data->unemploymentReason); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tbl_account_studNum')); ?>:</b>
	<?php echo CHtml::encode($data->tbl_account_studNum); ?>
	<br />

	*/ ?>

</div>