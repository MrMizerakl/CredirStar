<?php

use yii\db\Migration;

/**
 * Class m171127_132929_insert_records_loans
 */
class m171127_132929_insert_records_loans extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $data = json_decode( file_get_contents(__DIR__. '/../loans.json', true) , true);

        Yii::$app->db->createCommand()->batchInsert(
            'loan',
            ['id', 'user_id', 'amount', 'interest', 'duration', 'start_date', 'end_date', 'campaign', 'status'],
            $data
        )->execute();

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('loan');
    }
}
