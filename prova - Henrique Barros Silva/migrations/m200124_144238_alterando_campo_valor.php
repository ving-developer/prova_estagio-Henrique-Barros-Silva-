<?php

use yii\db\Migration;

/**
 * Class m200124_144238_alterando_campo_valor
 */
class m200124_144238_alterando_campo_valor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('financeiro','valor',$this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('financeiro','valor',$this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_144238_alterando_campo_valor cannot be reverted.\n";

        return false;
    }
    */
}
