<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'studNum'); ?>
		<?php echo $form->textField($model,'studNum',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'studNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userID'); ?>
		<?php echo $form->textField($model,'userID'); ?>
		<?php echo $form->error($model,'userID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MiddleName'); ?>
		<?php echo $form->textField($model,'MiddleName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'MiddleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civilStat'); ?>
		<?php echo $form->textField($model,'civilStat'); ?>
		<?php echo $form->error($model,'civilStat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
                <p class="hint">Please follow this format YYYY-MM-DD</p>
		<?php echo $form->labelEx($model,'birthDate'); ?>
		<?php echo $form->textField($model,'birthDate'); ?>
		<?php echo $form->error($model,'birthDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permAdd'); ?>
		<?php echo $form->textField($model,'permAdd',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'permAdd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAdd'); ?>
		<?php echo $form->textField($model,'emailAdd',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailAdd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactNum'); ?>
		<?php echo $form->textField($model,'contactNum',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'contactNum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gradYear'); ?>
		<?php echo $form->textField($model,'gradYear'); ?>
		<?php echo $form->error($model,'gradYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'college'); ?>
		<?php echo $form->dropDownList($model,
                        'college', 
                        CHtml::listData(
                                College::model()->findAll(),
                                'collegeID',
                                'collegeName'
                                ),
                        array(
                            'class'=>'college-dropdown',
                            'options'=> array('1'=>array(
                                     'selected' => "selected"
                                   )
                               )
                            )
                        );
                ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->dropDownList($model,
                        'degree', 
                        CHtml::listData(
                                Course::model()->findAll(),
                                'courseID',
                                'courseName'
                                ),
                        array(
                            'class'=>'course-dropdown',
                            'options'=> array('1'=>array('disabled'=>true),
                                        '5'=>array('disabled'=>true),
                                        '17'=>array('disabled'=>true),
                                        '19'=>array('disabled'=>true),
                                        '25'=>array('disabled'=>true),
                                        '29'=>array('disabled'=>true),
                                        '31'=>array('disabled'=>true),
                                        '34'=>array('disabled'=>true),
                                        '36'=>array('disabled'=>true)
                               )
                            )
                        );
                ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar'); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->