<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UserMessage;

/**
 * UserMessageSearch represents the model behind the search form about `frontend\models\UserMessage`.
 */
class UserMessageSearch extends UserMessage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_message_id', 'user_id', 'to_user_id', 'is_read'], 'integer'],
            [['message', 'created_date'], 'safe'],
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
        $query = UserMessage::find();

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
            'user_message_id' => $this->user_message_id,
            'user_id' => $this->user_id,
            'to_user_id' => $this->to_user_id,
            'created_date' => $this->created_date,
            'is_read' => $this->is_read,
        ]);

        $query->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
