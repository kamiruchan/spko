<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User','url'=>array('create')),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
        'id'=>'name-grid',
	'dataProvider'=>$dataProvider,
        'type'=>'striped bordered condensed',
)); ?>