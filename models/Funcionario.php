<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property int $cpf
 * @property string|null $endereco
 * @property string|null $email
 * @property string|null $telefone
 * @property int|null $usuario_id
 *
 * @property Administrador[] $administradors
 * @property Motorista[] $motoristas
 * @property Usuario $usuario
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpf'], 'required'],
            [['cpf', 'usuario_id'], 'integer'],
            [['endereco', 'email', 'telefone'], 'string', 'max' => 255],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpf' => 'Cpf',
            'endereco' => 'Endereco',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * Gets query for [[Administradors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdministradors()
    {
        return $this->hasMany(Administrador::class, ['funcionarios_id' => 'id']);
    }

    /**
     * Gets query for [[Motoristas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMotoristas()
    {
        return $this->hasMany(Motorista::class, ['funcionario_id' => 'id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'usuario_id']);
    }
}
