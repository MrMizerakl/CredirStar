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

        $textSql = '';
        foreach ($data as $item){
            $textSql .= "(". $item['id'].",". $item['user_id'].",". $item['amount'].",". $item['interest'].",". $item['duration'].",'". date("Y-m-d", $item['start_date'])."','". date("Y-m-d", $item['end_date'])."',". $item['campaign'].",". $item['status']."),";
        }

        $textSql = substr($textSql, 0, strlen($textSql)-1). ';';

        $this->execute("INSERT INTO `loan`(`id`, `user_id`, `amount`, `interest`, `duration`, `start_date`, `end_date`, `campaign`, `status`) VALUES ". $textSql);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('loan');
    }
}
