<?php

use yii\db\Migration;

/**
 * Class m230410_214156_funcionario
 */
class m230410_214156_funcionario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela funcionario 
        $this->createTable('Funcionario', [
            'id' => $this->primaryKey(),
            'cpf' => $this->integer()->notNull(),
            'endereco' => $this->string(),
            'email' => $this->string(),
            'telefone' => $this->string(),
            'usuario_id' =>  $this->integer()
        ]);
        #cria chave estrangeira
        $this->addForeignKey('fk_usuario','funcionario','usuario_id','Usuario','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apaga chave estrangeria 
        $this->dropForeignKey('fk_usuario', 'Funcionario');
        #apaga tabela funcionario
        $this->dropTable('Funcionario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_214156_funcionario cannot be reverted.\n";

        return false;
    }
    */
}
