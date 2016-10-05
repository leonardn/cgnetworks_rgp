<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "media".
 *
 * @property integer $media_id
 * @property integer $user_id
 * @property string $title
 * @property integer $url
 * @property string $caption
 * @property string $alt_text
 * @property string $description
 * @property string $media_type
 * @property integer $number_views
 * @property integer $number_of_likes
 * @property integer $number_of_dislikes
 * @property integer $number_of_comments
 * @property string $created_date
 * @property string $is_private
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'url', 'caption', 'alt_text', 'description', 'media_type', 'number_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments', 'created_date', 'is_private'], 'required'],
            [['user_id', 'url', 'number_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments'], 'integer'],
            [['caption', 'description', 'media_type', 'is_private'], 'string'],
            [['created_date'], 'safe'],
            [['title', 'alt_text'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'media_id' => 'Media ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'url' => 'Url',
            'caption' => 'Caption',
            'alt_text' => 'Alt Text',
            'description' => 'Description',
            'media_type' => 'Media Type',
            'number_views' => 'Number Views',
            'number_of_likes' => 'Number Of Likes',
            'number_of_dislikes' => 'Number Of Dislikes',
            'number_of_comments' => 'Number Of Comments',
            'created_date' => 'Created Date',
            'is_private' => 'Is Private',
        ];
    }
}
