<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "motorista".
 *
 * @property int $id
 * @property string $tipo_carteira
 * @property int $funcionario_id
 *
 * @property Funcionario $funcionario
 * @property ViagemRealizada[] $viagemRealizadas
 */
class Motorista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'motorista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_carteira', 'funcionario_id'], 'required'],
            [['funcionario_id'], 'integer'],
            [['tipo_carteira'], 'string', 'max' => 255],
            [['funcionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::class, 'targetAttribute' => ['funcionario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_carteira' => 'Tipo Carteira',
            'funcionario_id' => 'Funcionario ID',
        ];
    }

    /**
     * Gets query for [[Funcionario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionario::class, ['id' => 'funcionario_id']);
    }

    /**
     * Gets query for [[ViagemRealizadas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViagemRealizadas()
    {
        return $this->hasMany(ViagemRealizada::class, ['motoristas_id' => 'id']);
    }
}
