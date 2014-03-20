<?php
/* @var $this EmpInfoController */
/* @var $model EmpInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emp-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empOrNot'); ?>
		<?php echo $form->textField($model,'empOrNot'); ?>
		<?php echo $form->error($model,'empOrNot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workplaceName'); ?>
		<?php echo $form->textField($model,'workplaceName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'workplaceName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workplaceAdd'); ?>
		<?php echo $form->textField($model,'workplaceAdd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'workplaceAdd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currJobRelToCourse'); ?>
		<?php echo $form->textField($model,'currJobRelToCourse'); ?>
		<?php echo $form->error($model,'currJobRelToCourse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unemploymentReason'); ?>
		<?php echo $form->textField($model,'unemploymentReason'); ?>
		<?php echo $form->error($model,'unemploymentReason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tbl_account_studNum'); ?>
		<?php echo $form->textField($model,'tbl_account_studNum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tbl_account_studNum'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->