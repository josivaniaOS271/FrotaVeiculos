<?php

use yii\db\Migration;

/**
 * Class m230410_215427_viagem
 */
class m230410_215427_viagem extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela viagens (id, data/ora, saida, destino, num de passageiros, status (concluida/nao concluida))
        $this->createTable('Viagens', [
            'id' => $this->primaryKey(),
            'dataHora' => $this->dateTime(),
            'saida' => $this->string(),
            'destino' => $this->string(),
            'n_passageiros' => $this->string(),
            'status' => $this->string(),
            'administrador_id' => $this->integer()->notNull(),
        ]);
        #cria chave estrangeira
        $this->addForeignKey('fk_administrador','Viagens','administrador_id','Administrador','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       #apagachave estrangeira
       $this->dropForeignKey('fk_administrador','Viagens');

       #apaga tabela viagens
       $this->dropTable('Viagens'); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_215427_viagem cannot be reverted.\n";

        return false;
    }
    */
}
