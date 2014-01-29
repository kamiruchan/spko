<?php

class m140127_173349_create_account_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_accounts', array(
		 'id' => 'pk',
		 'stud_num' => 'string NOT NULL',
		 'last_name' => 'string NOT NULL',
		 'first_name' => 'string NOT NULL',
		 'middle_name' => 'string NOT NULL',
		 'civil_status' => 'string NOT NULL',
		 'gender' => 'string NOT NULL',
		 'birth_date' => 'string(8) NOT NULL',
		 'perm_add' => 'string NOT NULL',
		 'email_add' => 'string NOT NULL',
		 'contact_num' => 'int(20)',
		 'grad_year' => 'int(4)',
		 'course' => 'string NOT NULL',
		 'major' => 'string',
		 'employed_or_not' => 'string',
		 'emp_status' => 'string',
		 'occupation' => 'string',
		 'workplace_name' => 'string',
		 'workplace_addr' => 'string',
		 'job_rel_course' => 'string',
		 'reasons_not_emp' => 'string',
		 'not_rel_course' => 'string',
		 'was_curr_rel_to_job' => 'string',
		 'competencies' => 'string',
		 'suggestions' => 'string',
		 'useful_things_or_practices' => 'string',
		 'values_used' => 'string',
		 'how_then' => 'string',
		 ), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('tbl_accounts');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}