<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\viagemrealizada;

/**
 * ViagemRealizadaSearch represents the model behind the search form of `app\models\viagemrealizada`.
 */
class ViagemRealizadaSearch extends viagemrealizada
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['veiculos_id', 'motoristas_id', 'viagens_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = viagemrealizada::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'veiculos_id' => $this->veiculos_id,
            'motoristas_id' => $this->motoristas_id,
            'viagens_id' => $this->viagens_id,
        ]);

        return $dataProvider;
    }
}
