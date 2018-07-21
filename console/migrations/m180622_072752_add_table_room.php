<?php

use yii\db\Migration;

/**
 * Class m180622_072752_add_table_room
 */
class m180622_072752_add_table_room extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rooms}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'reserv' => $this->boolean()->defaultValue(false),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rooms}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180622_072752_add_table_room cannot be reverted.\n";

        return false;
    }
    */
}
