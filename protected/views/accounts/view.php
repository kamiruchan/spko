<?php
/* @var $this AccountsController */
/* @var $model Accounts */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->student_num,
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Accounts', 'url'=>array('create')),
	array('label'=>'Update Accounts', 'url'=>array('update', 'id'=>$model->student_num)),
	array('label'=>'Delete Accounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->student_num),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>View Accounts #<?php echo $model->student_num; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'student_num',
		'last_name',
		'first_name',
		'middle_name',
		'civil_status',
		'gender',
		'birth_date',
		'perm_add',
		'email_add',
		'contact_num',
		'grad_year',
		'course',
		'major',
		'employed_or_not',
		'emp_status',
		'occupation',
		'workplace_name',
		'workplace_addr',
		'job_rel_course',
		'reasons_not_emp',
		'not_rel_course',
		'was_curr_rel_to_course',
		'competencies',
		'suggestions',
		'useful_things_or_practices',
		'values_used',
		'how_then',
	),
)); ?>
