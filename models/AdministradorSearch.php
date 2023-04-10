<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\administrador;

/**
 * AdministradorSearch represents the model behind the search form of `app\models\administrador`.
 */
class AdministradorSearch extends administrador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'funcionarios_id'], 'integer'],
            [['matricula'], 'safe'],
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
        $query = administrador::find();

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
            'funcionarios_id' => $this->funcionarios_id,
        ]);

        $query->andFilterWhere(['like', 'matricula', $this->matricula]);

        return $dataProvider;
    }
}
