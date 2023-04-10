<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_veiculo".
 *
 * @property int $id
 * @property string $modelo
 * @property int|null $ano
 * @property string|null $marca
 * @property string|null $combustivel
 * @property string|null $cor
 *
 * @property Veiculos[] $veiculos
 */
class TipoVeiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modelo'], 'required'],
            [['ano'], 'integer'],
            [['modelo', 'marca', 'combustivel', 'cor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modelo' => 'Modelo',
            'ano' => 'Ano',
            'marca' => 'Marca',
            'combustivel' => 'Combustivel',
            'cor' => 'Cor',
        ];
    }

    /**
     * Gets query for [[Veiculos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculos()
    {
        return $this->hasMany(Veiculos::class, ['tipo_veiculo_id' => 'id']);
    }
}
