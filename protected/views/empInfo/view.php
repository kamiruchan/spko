<?php
/* @var $this EmpInfoController */
/* @var $model EmpInfo */

$this->breadcrumbs=array(
	'Emp Infos'=>array('index'),
	$model->empInfoID,
);

$this->menu=array(
	array('label'=>'List EmpInfo', 'url'=>array('index')),
	array('label'=>'Create EmpInfo', 'url'=>array('create')),
	array('label'=>'Update EmpInfo', 'url'=>array('update', 'id'=>$model->empInfoID)),
	array('label'=>'Delete EmpInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->empInfoID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpInfo', 'url'=>array('admin')),
);
?>

<h1>View EmpInfo #<?php echo $model->empInfoID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empInfoID',
		'empOrNot',
		'occupation',
		'workplaceName',
		'workplaceAdd',
		'currJobRelToCourse',
		'unemploymentReason',
		'tbl_account_studNum',
	),
)); ?>
