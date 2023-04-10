<?php

use yii\db\Migration;

/**
 * Class m230410_220136_motorista
 */
class m230410_220136_motorista extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela motorista
        $this->createTable('Motorista', [
            'id' => $this->primaryKey(),
            'tipo_carteira' => $this->string()->notNull(),
            'funcionario_id' => $this->integer()->notNull()

        ]);
        #cria chave estrangeira
        $this->addForeignKey('fk_funcionario','Motorista','funcionario_id','Funcionario','id');
 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apaga chave estrangeria 
        $this->dropForeignKey('fk_funcionario', 'Motorista');
        
        #apaga tabela motorista
        $this->dropTable('Motorista');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_220136_motorista cannot be reverted.\n";

        return false;
    }
    */
}
