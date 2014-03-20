<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('studNum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->studNum), array('view', 'id'=>$data->studNum)); ?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('accountID')); ?>:</b>
	<?php echo CHtml::encode($data->accountID); */?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MiddleName')); ?>:</b>
	<?php echo CHtml::encode($data->MiddleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('civilStat')); ?>:</b>
	<?php echo CHtml::encode($data->civilStat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthDate')); ?>:</b>
	<?php echo CHtml::encode($data->birthDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permAdd')); ?>:</b>
	<?php echo CHtml::encode($data->permAdd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAdd')); ?>:</b>
	<?php echo CHtml::encode($data->emailAdd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactNum')); ?>:</b>
	<?php echo CHtml::encode($data->contactNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gradYear')); ?>:</b>
	<?php echo CHtml::encode($data->gradYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('college')); ?>:</b>
	<?php echo CHtml::encode($data->college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('major')); ?>:</b>
	<?php echo CHtml::encode($data->major); ?>
	<br />

	*/ ?>

</div>