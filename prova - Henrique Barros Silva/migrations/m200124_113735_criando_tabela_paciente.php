<?php

use yii\db\Migration;

/**
 * Class m200124_113735_criando_tabela_paciente
 */
class m200124_113735_criando_tabela_paciente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('paciente',[
            'id'=>$this->primaryKey(),
            'nome' => $this->text()->notNull(),
            'nascimento' => $this->date(),
            'telefone' => $this->bigInteger()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('paciente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_113735_criando_tabela_paciente cannot be reverted.\n";

        return false;
    }
    */
}
