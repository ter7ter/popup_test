<?php

class m230219_120224_popup extends CDbMigration
{
	public function safeUp()
	{
        $this->createTable('tbl_popup', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'text' => 'text',
            'enable' => 'tinyint',
            'views' => 'int'
        ));
        $this->insert('tbl_popup', ['title' => 'Popup 1', 'text' => 'Текст первого попапа', 'enable' => 1, 'views' => 0]);
	}

	public function safeDown()
	{
        $this->dropTable('tbl_popup');
	}
}