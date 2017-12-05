<?php

namespace app\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CSLoan;

/**
 * CSLoanSearch represents the model behind the search form of `app\models\CSLoan`.
 */
class CSLoanSearch extends CSLoan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'duration', 'campaign'], 'integer'],
            [['amount', 'interest'], 'number'],
            [['start_date', 'end_date'], 'safe'],
            [['status'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CSLoan::find();

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
            'user_id' => $this->user_id,
            'amount' => $this->amount,
            'interest' => $this->interest,
            'duration' => $this->duration,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'campaign' => $this->campaign,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
