<?php

use yii\db\Migration;

/**
 * Class m230410_212643_TipoVeiculo
 */
class m230410_212643_TipoVeiculo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela tipode veiculo (id, modelo,ano, marca, combustivel, cor)
        $this->createTable('tipo_veiculo', [
            'id' => $this->primaryKey(),
            'modelo' => $this->string()->notNull(),
            'ano' => $this->integer(),
            'marca' => $this->string(),
            'combustivel' => $this->string(),
            'cor' => $this->string(),
           ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apaga tabela tipo de veiculo
        $this->dropTable('tipo_veiculo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_212643_TipoVeiculo cannot be reverted.\n";

        return false;
    }
    */
}
