<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedback-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'firstJobRelToCourse'); ?>
		<?php echo $form->textField($model,'firstJobRelToCourse'); ?>
		<?php echo $form->error($model,'firstJobRelToCourse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competencies'); ?>
		<?php echo $form->textField($model,'competencies',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'competencies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skillsRelToCourse'); ?>
		<?php echo $form->textField($model,'skillsRelToCourse',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'skillsRelToCourse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thingsFromCurr'); ?>
		<?php echo $form->textField($model,'thingsFromCurr',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'thingsFromCurr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suggestionsToCurr'); ?>
		<?php echo $form->textField($model,'suggestionsToCurr',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'suggestionsToCurr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valuesLearntAlmaMater'); ?>
		<?php echo $form->textField($model,'valuesLearntAlmaMater',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'valuesLearntAlmaMater'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'howPracticed'); ?>
		<?php echo $form->textField($model,'howPracticed',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'howPracticed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountID'); ?>
		<?php echo $form->textField($model,'accountID'); ?>
		<?php echo $form->error($model,'accountID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->