<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\veiculos;

/**
 * VeiculosSearch represents the model behind the search form of `app\models\veiculos`.
 */
class VeiculosSearch extends veiculos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tipo_veiculo_id'], 'integer'],
            [['chassi', 'placa', 'setor'], 'safe'],
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
        $query = veiculos::find();

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
            'id' => $this->id,
            'tipo_veiculo_id' => $this->tipo_veiculo_id,
        ]);

        $query->andFilterWhere(['like', 'chassi', $this->chassi])
            ->andFilterWhere(['like', 'placa', $this->placa])
            ->andFilterWhere(['like', 'setor', $this->setor]);

        return $dataProvider;
    }
}
