<?php

use yii\db\Migration;

/**
 * Class m221102_154530_add_table_photos
 */
class m221102_154530_add_table_photos extends Migration
{
    public function up()
    {
        $this->createTable('{{%photos}}', [
            'id' => $this->primaryKey(),
            'album_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
        ]);

        $this->createIndex('{{%idx-photos-album_id}}', '{{%photos}}', 'album_id');
    }

    public function down()
    {
        $this->dropTable('{{%photos}}');
    }
}
