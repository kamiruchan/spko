<?php
/* @var $this AccountController */
/* @var $model Account */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->studNum,
);

$this->menu=array(
	array('label'=>'List Account', 'url'=>array('index')),
	array('label'=>'Create Account', 'url'=>array('create')),
	array('label'=>'Update Account', 'url'=>array('update', 'id'=>$model->studNum)),
	array('label'=>'Delete Account', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->studNum),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Account', 'url'=>array('admin')),
);
?>

<h1>View Account #<?php echo $model->studNum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'accountID',
		'studNum',
		'username',
		'lastName',
		'firstName',
		'MiddleName',
		'civilStat',
		'gender',
		'birthDate',
		'permAdd',
		'emailAdd',
		'contactNum',
		'gradYear',
		'college',
		'degree',
		'major',
	),
)); ?>
