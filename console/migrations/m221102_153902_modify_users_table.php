<?php

use yii\db\Migration;

/**
 * Class m221102_153902_modify_users_table
 */
class m221102_153902_modify_users_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%users}}', 'first_name', $this->string()->after('username'));
        $this->addColumn('{{%users}}', 'last_name', $this->string()->after('first_name'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%users}}', 'last_name');
        $this->dropColumn('{{%users}}', 'first_name');
    }

}
