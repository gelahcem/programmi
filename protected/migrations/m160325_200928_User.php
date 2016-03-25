<?php

class m160325_200928_User extends CDbMigration
{
	public function up()
	{
		$sql="
            CREATE TABLE `User` (
			  `id` int(11) NOT NULL,
			  `username` varchar(20) NOT NULL,
			  `password` varchar(128) NOT NULL,
			  `email` varchar(128) NOT NULL,
			  `activkey` varchar(128) NOT NULL DEFAULT '',
			  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
			  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
			  `superuser` int(1) NOT NULL DEFAULT '0',
			  `status` int(1) NOT NULL DEFAULT '0'
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			INSERT INTO `User` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', 'admin', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2016-03-14 15:44:56', '0000-00-00 00:00:00', 1, 1);

			ALTER TABLE `User`
			ADD PRIMARY KEY (`id`);
        ";

		$this->execute($sql);
	}

	public function down()
	{
		echo "m160325_200928_User does not support migration down.\n";
		return false;
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