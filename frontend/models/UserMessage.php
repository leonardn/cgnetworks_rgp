<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_messages".
 *
 * @property integer $user_message_id
 * @property integer $user_id
 * @property integer $to_user_id
 * @property string $message
 * @property string $created_date
 * @property integer $is_read
 */
class UserMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'to_user_id', 'message', 'created_date', 'is_read'], 'required'],
            [['user_id', 'to_user_id', 'is_read'], 'integer'],
            [['message'], 'string'],
            [['created_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_message_id' => 'User Message ID',
            'user_id' => 'User ID',
            'to_user_id' => 'To User ID',
            'message' => 'Message',
            'created_date' => 'Created Date',
            'is_read' => 'Is Read',
        ];
    }
}
