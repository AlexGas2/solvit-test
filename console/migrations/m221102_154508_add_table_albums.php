<?php

use yii\db\Migration;

/**
 * Class m221102_154508_add_table_albums
 */
class m221102_154508_add_table_albums extends Migration
{
    public function up()
    {
        $this->createTable('{{%albums}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull()
        ]);

        $this->createIndex('{{%idx-albums-user_id}}', '{{%albums}}', 'user_id');
    }

    public function down()
    {
        $this->dropTable('{{%albums}}');
    }
}
