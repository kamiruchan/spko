<?php
/* @var $this AccountsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accounts',
);

$this->menu=array(
	array('label'=>'Create Accounts', 'url'=>array('create')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
