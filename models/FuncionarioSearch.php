<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\funcionario;

/**
 * FuncionarioSearch represents the model behind the search form of `app\models\funcionario`.
 */
class FuncionarioSearch extends funcionario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cpf', 'usuario_id'], 'integer'],
            [['endereco', 'email', 'telefone'], 'safe'],
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
        $query = funcionario::find();

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
            'cpf' => $this->cpf,
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telefone', $this->telefone]);

        return $dataProvider;
    }
}
