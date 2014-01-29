<?php
/* @var $this AccountsController */
/* @var $data Accounts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_num')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->student_num), array('view', 'id'=>$data->student_num)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('civil_status')); ?>:</b>
	<?php echo CHtml::encode($data->civil_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('perm_add')); ?>:</b>
	<?php echo CHtml::encode($data->perm_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_add')); ?>:</b>
	<?php echo CHtml::encode($data->email_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_num')); ?>:</b>
	<?php echo CHtml::encode($data->contact_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grad_year')); ?>:</b>
	<?php echo CHtml::encode($data->grad_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course')); ?>:</b>
	<?php echo CHtml::encode($data->course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('major')); ?>:</b>
	<?php echo CHtml::encode($data->major); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employed_or_not')); ?>:</b>
	<?php echo CHtml::encode($data->employed_or_not); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_status')); ?>:</b>
	<?php echo CHtml::encode($data->emp_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_name')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplace_addr')); ?>:</b>
	<?php echo CHtml::encode($data->workplace_addr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_rel_course')); ?>:</b>
	<?php echo CHtml::encode($data->job_rel_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reasons_not_emp')); ?>:</b>
	<?php echo CHtml::encode($data->reasons_not_emp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('not_rel_course')); ?>:</b>
	<?php echo CHtml::encode($data->not_rel_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('was_curr_rel_to_course')); ?>:</b>
	<?php echo CHtml::encode($data->was_curr_rel_to_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competencies')); ?>:</b>
	<?php echo CHtml::encode($data->competencies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suggestions')); ?>:</b>
	<?php echo CHtml::encode($data->suggestions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('useful_things_or_practices')); ?>:</b>
	<?php echo CHtml::encode($data->useful_things_or_practices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('values_used')); ?>:</b>
	<?php echo CHtml::encode($data->values_used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_then')); ?>:</b>
	<?php echo CHtml::encode($data->how_then); ?>
	<br />

	*/ ?>

</div>