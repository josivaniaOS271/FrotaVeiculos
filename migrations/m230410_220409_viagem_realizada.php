<?php

use yii\db\Migration;

/**
 * Class m230410_220409_viagem_realizada
 */
class m230410_220409_viagem_realizada extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela administrador
        $this->createTable('viagem_realizada', [
            'veiculos_id' => $this->integer()->notNull(),
            'motoristas_id' => $this->integer()->notNull(),
            'viagens_id' => $this->integer()->notNull() 
         ]);  

        $this->addPrimaryKey('pk_viagem_realizada', 'viagem_realizada', ['veiculos_id', 'motoristas_id', 'viagens_id']); 

        #cria chave estrangeira referente a tabela veiculos
        $this->addForeignKey('fk_veiculos','viagem_realizada','veiculos_id','veiculos','id');

        #cria chave estrangeira referente a tabela motorista
        $this->addForeignKey('fk_motoristas','viagem_realizada','motoristas_id','Motorista','id');
              
        #cria chave estrangeira referente a tabela viagem
         $this->addForeignKey('fk_viagens','viagem_realizada','viagens_id','Viagens','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apaga chave estrangeira referente a tabela veiculos
        $this->dropForeignKey('fk_veiculos','viagem_realizada');

        #apaga chave estrangeira referente a tabela motorista
        $this->dropForeignKey('fk_motoristas','viagem_realizada');
              
        #apaga chave estrangeira referente a tabela viagem
        $this->dropForeignKey('fk_viagens','viagem_realizada');

        #apaga tabela viagens_realizadas
        $this->dropTable('viagem_realizada');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_220409_viagem_realizada cannot be reverted.\n";

        return false;
    }
    */
}
