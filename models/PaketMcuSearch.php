<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaketMcu;

/**
 * PaketMcuSearch represents the model behind the search form of `app\models\PaketMcu`.
 */
class PaketMcuSearch extends PaketMcu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'integer'],
            [['nama', 'is_active', 'kode_debitur', 'jenis_paket'], 'safe'],
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
        $query = PaketMcu::find()->orderBy('kode Desc');

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
            'kode' => $this->kode,
        ]);

        $query->andFilterWhere(['ilike', 'nama', $this->nama])
            ->andFilterWhere(['ilike', 'is_active', $this->is_active])
            ->andFilterWhere(['ilike', 'kode_debitur', $this->kode_debitur])
            ->andFilterWhere(['ilike', 'jenis_paket', $this->jenis_paket]);

        return $dataProvider;
    }
}
