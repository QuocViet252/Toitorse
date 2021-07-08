<?php

namespace Fuel\Migrations;

class Create_abc_table
{
	public function up()
	{
		\DBUtil::create_table('abc_table', array(

		));
	}

	public function down()
	{
		\DBUtil::drop_table('abc_table');
	}
}