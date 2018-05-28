<?php

namespace kouosl\directory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\directory\models\Bilgiler;

/**
 * BilgilerSearch represents the model behind the search form of `kouosl\directory\models\Bilgiler`.
 */
class BilgilerSearch extends Bilgiler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rehberID'], 'integer'],
            [['ad', 'mobilNo', 'evNo', 'Eposta', 'Adres'], 'safe'],
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
        $query = Bilgiler::find();

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
            'rehberID' => $this->rehberID,
        ]);

        $query->andFilterWhere(['like', 'ad', $this->ad])
            ->andFilterWhere(['like', 'mobilNo', $this->mobilNo])
            ->andFilterWhere(['like', 'evNo', $this->evNo])
            ->andFilterWhere(['like', 'Eposta', $this->Eposta])
            ->andFilterWhere(['like', 'Adres', $this->Adres]);

        return $dataProvider;
    }
}
