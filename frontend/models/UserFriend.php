<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_friends".
 *
 * @property integer $user_friend_id
 * @property integer $user_id
 * @property integer $friend_user_id
 * @property integer $is_friend
 * @property integer $is_online
 * @property string $created_date
 */
class UserFriend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_friends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'friend_user_id', 'is_friend', 'is_online', 'created_date'], 'required'],
            [['user_id', 'friend_user_id', 'is_friend', 'is_online'], 'integer'],
            [['created_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_friend_id' => 'User Friend ID',
            'user_id' => 'User ID',
            'friend_user_id' => 'Friend User ID',
            'is_friend' => 'Is Friend',
            'is_online' => 'Is Online',
            'created_date' => 'Created Date',
        ];
    }
}
