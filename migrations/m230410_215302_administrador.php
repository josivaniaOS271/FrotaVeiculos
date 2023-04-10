<?php

use yii\db\Migration;

/**
 * Class m230410_215302_administrador
 */
class m230410_215302_administrador extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #cria tabela administrador
        $this->createTable('Administrador', [
            'id' => $this->primaryKey(),
            'matricula' => $this->string()->notNull(),
            'funcionarios_id' => $this->integer()->notNull()

        ]);
        #cria chave estrangeira
        $this->addForeignKey('fk_funcionarios','Administrador','funcionarios_id','Funcionario','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        #apagachave estrangeira
        $this->dropForeignKey('fk_funcionarios','Administrador');

        #apaga tabela adm
        $this->dropTable('Administrador'); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230410_215302_administrador cannot be reverted.\n";

        return false;
    }
    */
}
