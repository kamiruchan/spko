<?php
/* @var $this EmpInfoController */
/* @var $model EmpInfo */

$this->breadcrumbs=array(
	'Emp Infos'=>array('index'),
	$model->empInfoID=>array('view','id'=>$model->empInfoID),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpInfo', 'url'=>array('index')),
	array('label'=>'Create EmpInfo', 'url'=>array('create')),
	array('label'=>'View EmpInfo', 'url'=>array('view', 'id'=>$model->empInfoID)),
	array('label'=>'Manage EmpInfo', 'url'=>array('admin')),
);
?>

<h1>Update EmpInfo <?php echo $model->empInfoID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>