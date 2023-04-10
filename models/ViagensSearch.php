<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\viagens;

/**
 * ViagensSearch represents the model behind the search form of `app\models\viagens`.
 */
class ViagensSearch extends viagens
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'administrador_id'], 'integer'],
            [['dataHora', 'saida', 'destino', 'n_passageiros', 'status'], 'safe'],
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
        $query = viagens::find();

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
            'dataHora' => $this->dataHora,
            'administrador_id' => $this->administrador_id,
        ]);

        $query->andFilterWhere(['like', 'saida', $this->saida])
            ->andFilterWhere(['like', 'destino', $this->destino])
            ->andFilterWhere(['like', 'n_passageiros', $this->n_passageiros])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
