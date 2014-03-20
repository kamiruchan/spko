<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('courseID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->courseID), array('view', 'id'=>$data->courseID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('courseName')); ?>:</b>
	<?php echo CHtml::encode($data->courseName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CollegeID')); ?>:</b>
	<?php echo CHtml::encode($data->CollegeID); ?>
	<br />


</div>