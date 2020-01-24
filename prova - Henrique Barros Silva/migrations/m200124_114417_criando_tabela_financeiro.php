<?php

use yii\db\Migration;

/**
 * Class m200124_114417_criando_tabela_financeiro
 */
class m200124_114417_criando_tabela_financeiro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('financeiro',[
           'id' => $this->primaryKey(),
            'data' => $this->date()->defaultValue(new \yii\db\Expression('NOW()')),
            'forma' => $this->integer()->notNull(),
            'valor' => $this->integer(8,2),
            'id_dr' => $this->integer()->notNull(),
            'id_cliente' => $this->integer()->notNull(),
            'data_cheque' => $this->date(),
            'parcelamentocartao' => $this->smallInteger()
        ]);

        $this->addForeignKey('fk_financeiro_cliente ','financeiro','id_cliente','paciente','id');
        $this->addForeignKey('fk_financeiro_odonto','financeiro','id_dr','odonto','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('financeiro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_114417_criando_tabela_financeiro cannot be reverted.\n";

        return false;
    }
    */
}
