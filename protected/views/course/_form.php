<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'courseID'); ?>
		<?php echo $form->textField($model,'courseID'); ?>
		<?php echo $form->error($model,'courseID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'courseName'); ?>
		<?php echo $form->textField($model,'courseName',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'courseName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CollegeID'); ?>
		<?php echo $form->textField($model,'CollegeID'); ?>
		<?php echo $form->error($model,'CollegeID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->