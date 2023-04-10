<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viagens".
 *
 * @property int $id
 * @property string|null $dataHora
 * @property string|null $saida
 * @property string|null $destino
 * @property string|null $n_passageiros
 * @property string|null $status
 * @property int $administrador_id
 *
 * @property Administrador $administrador
 * @property ViagemRealizada[] $viagemRealizadas
 */
class Viagens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viagens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataHora'], 'safe'],
            [['administrador_id'], 'required'],
            [['administrador_id'], 'integer'],
            [['saida', 'destino', 'n_passageiros', 'status'], 'string', 'max' => 255],
            [['administrador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Administrador::class, 'targetAttribute' => ['administrador_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dataHora' => 'Data Hora',
            'saida' => 'Saida',
            'destino' => 'Destino',
            'n_passageiros' => 'N Passageiros',
            'status' => 'Status',
            'administrador_id' => 'Administrador ID',
        ];
    }

    /**
     * Gets query for [[Administrador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdministrador()
    {
        return $this->hasOne(Administrador::class, ['id' => 'administrador_id']);
    }

    /**
     * Gets query for [[ViagemRealizadas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViagemRealizadas()
    {
        return $this->hasMany(ViagemRealizada::class, ['viagens_id' => 'id']);
    }
}
