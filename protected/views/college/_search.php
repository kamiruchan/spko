<?php
/* @var $this CollegeController */
/* @var $model College */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'collegeID'); ?>
		<?php echo $form->textField($model,'collegeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'collegeName'); ?>
		<?php echo $form->textField($model,'collegeName',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->