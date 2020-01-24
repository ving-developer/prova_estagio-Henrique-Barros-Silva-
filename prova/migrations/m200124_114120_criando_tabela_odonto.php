<?php

use yii\db\Migration;

/**
 * Class m200124_114120_criando_tabela_odonto
 */
class m200124_114120_criando_tabela_odonto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('odonto',[
           'id' => $this->primaryKey(),
           'nome' => $this->text(),
            'cpf' => $this->bigInteger(),
            'cro' => $this->text(),
            'sobrenome' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('odonto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_114120_criando_tabela_odonto cannot be reverted.\n";

        return false;
    }
    */
}
