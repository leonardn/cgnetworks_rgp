<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posts;

/**
 * PostsSearch represents the model behind the search form about `backend\models\Posts`.
 */
class PostsSearch extends Posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'topic_id', 'user_id', 'number_of_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments'], 'integer'],
            [['title', 'slug', 'content', 'tags', 'created_date', 'is_allow_comment', 'is_private', 'status'], 'safe'],
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
        $query = Posts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'post_id' => $this->post_id,
            'topic_id' => $this->topic_id,
            'user_id' => $this->user_id,
            'number_of_views' => $this->number_of_views,
            'number_of_likes' => $this->number_of_likes,
            'number_of_dislikes' => $this->number_of_dislikes,
            'number_of_comments' => $this->number_of_comments,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'is_allow_comment', $this->is_allow_comment])
            ->andFilterWhere(['like', 'is_private', $this->is_private])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
