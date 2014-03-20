<?php
/* @var $this CollegeController */
/* @var $data College */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('collegeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->collegeID), array('view', 'id'=>$data->collegeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collegeName')); ?>:</b>
	<?php echo CHtml::encode($data->collegeName); ?>
	<br />


</div>