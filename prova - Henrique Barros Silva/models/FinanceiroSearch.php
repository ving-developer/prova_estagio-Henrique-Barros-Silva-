<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Financeiro;

/**
 * FinanceiroSearch represents the model behind the search form of `app\models\Financeiro`.
 */
class FinanceiroSearch extends Financeiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'forma', 'valor', 'id_dr', 'id_cliente', 'parcelamentocartao'], 'integer'],
            [['data', 'data_cheque'], 'safe'],
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
        $query = Financeiro::find();

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
            'data' => $this->data,
            'forma' => $this->forma,
            'valor' => $this->valor,
            'id_dr' => $this->id_dr,
            'id_cliente' => $this->id_cliente,
            'data_cheque' => $this->data_cheque,
            'parcelamentocartao' => $this->parcelamentocartao,
        ]);

        return $dataProvider;
    }
}
