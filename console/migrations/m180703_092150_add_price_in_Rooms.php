<?php

use yii\db\Migration;

/**
 * Class m180703_092150_add_price_in_Rooms
 */
class m180703_092150_add_price_in_Rooms extends Migration
{
    public function up()
    {
        $this->addColumn('{{%rooms}}', "price", $this->integer()->notNull());
        $this->addColumn('{{%rooms}}', "guest", $this->integer()->notNull());
        $this->addColumn('{{%rooms}}', "square", $this->integer()->notNull());
    }

    public function down()
    {
        $this->dropColumn('{{%rooms}}', "price");
        $this->dropColumn('{{%rooms}}', "guest");
        $this->dropColumn('{{%rooms}}', "square");
    }
}
