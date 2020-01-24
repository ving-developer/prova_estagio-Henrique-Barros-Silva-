<?php

use yii\db\Migration;

/**
 * Class m200124_124925_criando_tabela_formas_pagamento
 */
class m200124_124925_criando_tabela_formas_pagamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('formas_pagamento',[
           'id' =>$this->primaryKey(),
           'nome' => $this->string(256)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('formas_pagamento');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_124925_criando_tabela_formas_pagamento cannot be reverted.\n";

        return false;
    }
    */
}
