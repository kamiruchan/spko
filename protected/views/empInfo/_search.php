<?php
/* @var $this EmpInfoController */
/* @var $model EmpInfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'empInfoID'); ?>
		<?php echo $form->textField($model,'empInfoID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empOrNot'); ?>
		<?php echo $form->textField($model,'empOrNot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workplaceName'); ?>
		<?php echo $form->textField($model,'workplaceName',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'workplaceAdd'); ?>
		<?php echo $form->textField($model,'workplaceAdd',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currJobRelToCourse'); ?>
		<?php echo $form->textField($model,'currJobRelToCourse'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unemploymentReason'); ?>
		<?php echo $form->textField($model,'unemploymentReason'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountID'); ?>
		<?php echo $form->textField($model,'accountID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->