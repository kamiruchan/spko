<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'studNum'); ?>
		<?php echo $form->textField($model,'studNum',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feedbackID'); ?>
		<?php echo $form->textField($model,'feedbackID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstJobRelToCourse'); ?>
		<?php echo $form->textField($model,'firstJobRelToCourse'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'competencies'); ?>
		<?php echo $form->textField($model,'competencies',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillsRelToCourse'); ?>
		<?php echo $form->textField($model,'skillsRelToCourse',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thingsFromCurr'); ?>
		<?php echo $form->textField($model,'thingsFromCurr',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suggestionsToCurr'); ?>
		<?php echo $form->textField($model,'suggestionsToCurr',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valuesLearntAlmaMater'); ?>
		<?php echo $form->textField($model,'valuesLearntAlmaMater',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'howPracticed'); ?>
		<?php echo $form->textField($model,'howPracticed',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->