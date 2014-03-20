<?php
/* @var $this EmailController */
/* @var $model Email */

$this->breadcrumbs=array(
	'Emails'=>array('index'),
	$model->emailID=>array('view','id'=>$model->emailID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Email', 'url'=>array('index')),
	array('label'=>'Create Email', 'url'=>array('create')),
	array('label'=>'View Email', 'url'=>array('view', 'id'=>$model->emailID)),
	array('label'=>'Manage Email', 'url'=>array('admin')),
);
?>

<h1>Update Email <?php echo $model->emailID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>