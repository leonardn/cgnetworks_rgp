<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Topics;

/**
 * TopicsSearch represents the model behind the search form about `backend\models\Topics`.
 */
class TopicsSearch extends Topics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id'], 'integer'],
            [['name', 'page_id', 'created_date', 'status'], 'safe'],
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
        $query = Topics::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('page');

        $query->andFilterWhere([
            'topic_id' => $this->topic_id,
            //'page_id' => $this->page_id,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'pages.title', $this->page_id]);

        return $dataProvider;
    }
}
