<?php
/* @var $this EmpInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emp Infos',
);

$this->menu=array(
	array('label'=>'Create EmpInfo', 'url'=>array('create')),
	array('label'=>'Manage EmpInfo', 'url'=>array('admin')),
);
?>

<h1>Emp Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
