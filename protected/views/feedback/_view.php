<?php
/* @var $this FeedbackController */
/* @var $data Feedback */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feedbackID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feedbackID), array('view', 'id'=>$data->feedbackID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studNum')); ?>:</b>
	<?php echo CHtml::encode($data->studNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstJobRelToCourse')); ?>:</b>
	<?php echo CHtml::encode($data->firstJobRelToCourse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competencies')); ?>:</b>
	<?php echo CHtml::encode($data->competencies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillsRelToCourse')); ?>:</b>
	<?php echo CHtml::encode($data->skillsRelToCourse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thingsFromCurr')); ?>:</b>
	<?php echo CHtml::encode($data->thingsFromCurr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suggestionsToCurr')); ?>:</b>
	<?php echo CHtml::encode($data->suggestionsToCurr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('valuesLearntAlmaMater')); ?>:</b>
	<?php echo CHtml::encode($data->valuesLearntAlmaMater); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('howPracticed')); ?>:</b>
	<?php echo CHtml::encode($data->howPracticed); ?>
	<br />

	*/ ?>

</div>