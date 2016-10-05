<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Media;

/**
 * MediaSearch represents the model behind the search form about `backend\models\Media`.
 */
class MediaSearch extends Media
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['media_id', 'user_id', 'url', 'number_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments'], 'integer'],
            [['title', 'caption', 'alt_text', 'description', 'media_type', 'created_date', 'is_private'], 'safe'],
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
        $query = Media::find();

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
            'media_id' => $this->media_id,
            'user_id' => $this->user_id,
            'url' => $this->url,
            'number_views' => $this->number_views,
            'number_of_likes' => $this->number_of_likes,
            'number_of_dislikes' => $this->number_of_dislikes,
            'number_of_comments' => $this->number_of_comments,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'caption', $this->caption])
            ->andFilterWhere(['like', 'alt_text', $this->alt_text])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'media_type', $this->media_type])
            ->andFilterWhere(['like', 'is_private', $this->is_private]);

        return $dataProvider;
    }
}
