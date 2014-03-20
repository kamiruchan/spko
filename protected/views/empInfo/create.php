<?php
/* @var $this EmpInfoController */
/* @var $model EmpInfo */

$this->breadcrumbs=array(
	'Emp Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpInfo', 'url'=>array('index')),
	array('label'=>'Manage EmpInfo', 'url'=>array('admin')),
);
?>

<h1>Create EmpInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>