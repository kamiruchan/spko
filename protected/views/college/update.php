<?php
/* @var $this CollegeController */
/* @var $model College */

$this->breadcrumbs=array(
	'Colleges'=>array('index'),
	$model->collegeID=>array('view','id'=>$model->collegeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List College', 'url'=>array('index')),
	array('label'=>'Create College', 'url'=>array('create')),
	array('label'=>'View College', 'url'=>array('view', 'id'=>$model->collegeID)),
	array('label'=>'Manage College', 'url'=>array('admin')),
);
?>

<h1>Update College <?php echo $model->collegeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>