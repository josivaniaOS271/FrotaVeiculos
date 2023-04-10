<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculos".
 *
 * @property int $id
 * @property string $chassi
 * @property string $placa
 * @property string $setor
 * @property int|null $tipo_veiculo_id
 *
 * @property TipoVeiculo $tipoVeiculo
 * @property ViagemRealizada[] $viagemRealizadas
 */
class Veiculos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chassi', 'placa', 'setor'], 'required'],
            [['tipo_veiculo_id'], 'integer'],
            [['chassi', 'placa', 'setor'], 'string', 'max' => 255],
            [['tipo_veiculo_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoVeiculo::class, 'targetAttribute' => ['tipo_veiculo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chassi' => 'Chassi',
            'placa' => 'Placa',
            'setor' => 'Setor',
            'tipo_veiculo_id' => 'Tipo Veiculo ID',
        ];
    }

    /**
     * Gets query for [[TipoVeiculo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoVeiculo()
    {
        return $this->hasOne(TipoVeiculo::class, ['id' => 'tipo_veiculo_id']);
    }

    /**
     * Gets query for [[ViagemRealizadas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViagemRealizadas()
    {
        return $this->hasMany(ViagemRealizada::class, ['veiculos_id' => 'id']);
    }
}
