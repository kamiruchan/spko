<?php
/* @var $this AccountsController */
/* @var $model Accounts */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Accounts', 'url'=>array('create')),
	array('label'=>'Update Accounts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Accounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accounts', 'url'=>array('admin')),
);
?>

<h1>View Accounts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'picture',
		'stud_num',
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
		'college',
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
		'was_curr_rel_to_job',
		'competencies',
		'suggestions',
		'useful_things_or_practices',
		'values_used',
		'how_then',
	),
)); ?>
