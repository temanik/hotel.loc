<?php

use yii\db\Migration;

/**
 * Class m180703_080809_add_descr_in_Rooms
 */
class m180703_080809_add_descr_in_Rooms extends Migration
{
    public function up()
    {
        $this->addColumn('{{%rooms}}', "desc", $this->text());
    }

    public function down()
    {
        $this->dropColumn('{{%rooms}}', "desc");
    }
}
