<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_notifications".
 *
 * @property integer $user_notification_id
 * @property integer $user_id
 * @property integer $from_user_id
 * @property string $title
 * @property string $url
 * @property string $db_table_name
 * @property string $created_date
 * @property integer $is_read
 */
class UseruserNotification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_notifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'from_user_id', 'title', 'url', 'db_table_name', 'created_date', 'is_read'], 'required'],
            [['user_id', 'from_user_id', 'is_read'], 'integer'],
            [['created_date'], 'safe'],
            [['title'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 350],
            [['db_table_name'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_notification_id' => 'User Notification ID',
            'user_id' => 'User ID',
            'from_user_id' => 'From User ID',
            'title' => 'Title',
            'url' => 'Url',
            'db_table_name' => 'Db Table Name',
            'created_date' => 'Created Date',
            'is_read' => 'Is Read',
        ];
    }
}
