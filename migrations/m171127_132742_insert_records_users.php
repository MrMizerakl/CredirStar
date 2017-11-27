<?php

use yii\db\Migration;

/**
 * Class m171127_132742_insert_records_users
 */
class m171127_132742_insert_records_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $data = json_decode( file_get_contents(__DIR__. '/../users.json', true) , true);

        $textSql = '';
        foreach ($data as $item){
            $textSql .= "(". $item['id'].",'". $item['first_name']."','". $item['last_name']."','". $item['email']."',". $item['personal_code'].",". $item['phone'].",". $item['active'].",". $item['dead'].",'". $item['lang']."'),";
        }

        $textSql = substr($textSql, 0, strlen($textSql)-1). ';';

        $this->execute("INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `personal_code`, `phone`, `active`, `dead`, `lang`) VALUES ". $textSql);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('user');

    }
}
