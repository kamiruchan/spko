<?php
/* @var $this AccountsController */
/* @var $model Accounts */

$this->breadcrumbs=array(
	'Accounts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Accounts', 'url'=>array('index')),
	array('label'=>'Create Accounts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#accounts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Accounts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'accounts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'picture',
		'stud_num',
		'last_name',
		'first_name',
		'middle_name',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
