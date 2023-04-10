<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property int $id
 * @property string $matricula
 * @property int $funcionarios_id
 *
 * @property Funcionario $funcionarios
 * @property Viagens[] $viagens
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'funcionarios_id'], 'required'],
            [['funcionarios_id'], 'integer'],
            [['matricula'], 'string', 'max' => 255],
            [['funcionarios_id'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::class, 'targetAttribute' => ['funcionarios_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'funcionarios_id' => 'Funcionarios ID',
        ];
    }

    /**
     * Gets query for [[Funcionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionarios()
    {
        return $this->hasOne(Funcionario::class, ['id' => 'funcionarios_id']);
    }

    /**
     * Gets query for [[Viagens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViagens()
    {
        return $this->hasMany(Viagens::class, ['administrador_id' => 'id']);
    }
}
