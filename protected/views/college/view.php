<?php
/* @var $this CollegeController */
/* @var $model College */

$this->breadcrumbs=array(
	'Colleges'=>array('index'),
	$model->collegeID,
);

$this->menu=array(
	array('label'=>'List College', 'url'=>array('index')),
	//array('label'=>'Create College', 'url'=>array('create')),
	array('label'=>'Update College', 'url'=>array('update', 'id'=>$model->collegeID)),
	array('label'=>'Delete College', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->collegeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage College', 'url'=>array('admin')),
);
?>

<h1>View College #<?php echo $model->collegeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'collegeID',
		'collegeName',
	),
)); ?>
