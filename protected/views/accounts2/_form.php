<?php
/* @var $this AccountsController */
/* @var $model Accounts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accounts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->textField($model,'picture'); ?>
		<?php echo $form->error($model,'picture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stud_num'); ?>
		<?php echo $form->textField($model,'stud_num'); ?>
		<?php echo $form->error($model,'stud_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civil_status'); ?>
		<?php echo $form->textField($model,'civil_status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'civil_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perm_add'); ?>
		<?php echo $form->textField($model,'perm_add',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'perm_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_add'); ?>
		<?php echo $form->textField($model,'email_add',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_add'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_num'); ?>
		<?php echo $form->textField($model,'contact_num'); ?>
		<?php echo $form->error($model,'contact_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grad_year'); ?>
		<?php echo $form->textField($model,'grad_year'); ?>
		<?php echo $form->error($model,'grad_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'college'); ?>
		<?php echo $form->textField($model,'college',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'college'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dept_insti'); ?>
		<?php echo $form->textField($model,'dept_insti',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dept_insti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course'); ?>
		<?php echo $form->textField($model,'course',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employed_or_not'); ?>
		<?php echo $form->textField($model,'employed_or_not',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'employed_or_not'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_status'); ?>
		<?php echo $form->textField($model,'emp_status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workplace_name'); ?>
		<?php echo $form->textField($model,'workplace_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'workplace_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workplace_addr'); ?>
		<?php echo $form->textField($model,'workplace_addr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'workplace_addr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_rel_course'); ?>
		<?php echo $form->textField($model,'job_rel_course',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_rel_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reasons_not_emp'); ?>
		<?php echo $form->textField($model,'reasons_not_emp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'reasons_not_emp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'not_rel_course'); ?>
		<?php echo $form->textField($model,'not_rel_course',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'not_rel_course'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'was_curr_rel_to_job'); ?>
		<?php echo $form->textField($model,'was_curr_rel_to_job',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'was_curr_rel_to_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competencies'); ?>
		<?php echo $form->textField($model,'competencies',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'competencies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suggestions'); ?>
		<?php echo $form->textField($model,'suggestions',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'suggestions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'useful_things_or_practices'); ?>
		<?php echo $form->textField($model,'useful_things_or_practices',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'useful_things_or_practices'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'values_used'); ?>
		<?php echo $form->textField($model,'values_used',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'values_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how_then'); ?>
		<?php echo $form->textField($model,'how_then',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'how_then'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->