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

        Yii::$app->db->createCommand()->batchInsert(
            'user',
            ['id', 'first_name', 'last_name', 'email', 'personal_code', 'phone', 'active', 'dead', 'lang'],
            $data
        )->execute();

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('user');

    }
}
