<?php

use yii\db\Migration;

/**
 * Class m230410_212810_veiculos
 */
class m230410_212810_veiculos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('veiculos', [
            'id' => $this->primaryKey(),
            'chassi' => $this->string()->notNull(),
            'placa' => $this->string()->notNull(),
            'setor' => $this->string()->notNull(),
             'tipo_veiculo_id' => $this->integer()
         ]);
        
         $this->addForeignKey('fk_tipo_veiculo','veiculos','tipo_veiculo_id','tipo_veiculo','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apaga chave estrangeira
        $this->dropForeignKey('fk_tipo_veiculo', 'veiculos');


        $this->dropTable('veiculos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_212810_veiculos cannot be reverted.\n";

        return false;
    }
    */
}
