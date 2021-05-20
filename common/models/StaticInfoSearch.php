<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\StaticInfo;

/**
 * StaticInfoSearch represents the model behind the search form of `common\models\StaticInfo`.
 */
class StaticInfoSearch extends StaticInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['phone_number', 'location', 'logo_photo', 'instagram_profile', 'telegram_profile', 'facebook_profile', 'youtube_profile', 'address', 'slider_photo1', 'slider_photo2', 'working_time', 'email'], 'safe'],
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
        $query = StaticInfo::find();

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
        ]);

        $query->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'logo_photo', $this->logo_photo])
            ->andFilterWhere(['like', 'instagram_profile', $this->instagram_profile])
            ->andFilterWhere(['like', 'telegram_profile', $this->telegram_profile])
            ->andFilterWhere(['like', 'facebook_profile', $this->facebook_profile])
            ->andFilterWhere(['like', 'youtube_profile', $this->youtube_profile])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'slider_photo1', $this->slider_photo1])
            ->andFilterWhere(['like', 'slider_photo2', $this->slider_photo2])
            ->andFilterWhere(['like', 'working_time', $this->working_time])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
