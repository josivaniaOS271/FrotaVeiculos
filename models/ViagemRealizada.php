<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viagem_realizada".
 *
 * @property int $veiculos_id
 * @property int $motoristas_id
 * @property int $viagens_id
 *
 * @property Motorista $motoristas
 * @property Veiculos $veiculos
 * @property Viagens $viagens
 */
class ViagemRealizada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viagem_realizada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['veiculos_id', 'motoristas_id', 'viagens_id'], 'required'],
            [['veiculos_id', 'motoristas_id', 'viagens_id'], 'integer'],
            [['veiculos_id', 'motoristas_id', 'viagens_id'], 'unique', 'targetAttribute' => ['veiculos_id', 'motoristas_id', 'viagens_id']],
            [['motoristas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Motorista::class, 'targetAttribute' => ['motoristas_id' => 'id']],
            [['veiculos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculos::class, 'targetAttribute' => ['veiculos_id' => 'id']],
            [['viagens_id'], 'exist', 'skipOnError' => true, 'targetClass' => Viagens::class, 'targetAttribute' => ['viagens_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'veiculos_id' => 'Veiculos ID',
            'motoristas_id' => 'Motoristas ID',
            'viagens_id' => 'Viagens ID',
        ];
    }

    /**
     * Gets query for [[Motoristas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMotoristas()
    {
        return $this->hasOne(Motorista::class, ['id' => 'motoristas_id']);
    }

    /**
     * Gets query for [[Veiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculos()
    {
        return $this->hasOne(Veiculos::class, ['id' => 'veiculos_id']);
    }

    /**
     * Gets query for [[Viagens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViagens()
    {
        return $this->hasOne(Viagens::class, ['id' => 'viagens_id']);
    }
}
