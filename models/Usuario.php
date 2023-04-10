<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 *
 * @property Funcionario[] $funcionarios
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'senha', 'nome'], 'required'],
            [['login', 'senha', 'nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
        ];
    }

    /**
     * Gets query for [[Funcionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasMany(Funcionario::class, ['usuario_id' => 'id']);
    }
}
