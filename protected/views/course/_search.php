<?php
/* @var $this CourseController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'courseID'); ?>
		<?php echo $form->textField($model,'courseID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'courseName'); ?>
		<?php echo $form->textField($model,'courseName',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CollegeID'); ?>
		<?php echo $form->textField($model,'CollegeID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->