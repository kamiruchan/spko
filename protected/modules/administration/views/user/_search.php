<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'userID',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'username',array('span'=>5,'maxlength'=>30)); ?>

                            <?php echo $form->textFieldControlGroup($model,'rolesID',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'hint',array('span'=>5,'maxlength'=>30)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->