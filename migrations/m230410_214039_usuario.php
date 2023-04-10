<?php

use yii\db\Migration;

/**
 * Class m230410_214039_usuario
 */
class m230410_214039_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela viagens (id, data/ora, saida, destino, num de passageiros, status (concluida/nao concluida))
        $this->createTable('Usuario', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull(),
            'senha' => $this->string()->notNull(),
            'nome' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       #apaga tabela viagens
       $this->dropTable('Usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_214039_usuario cannot be reverted.\n";

        return false;
    }
    */
}
