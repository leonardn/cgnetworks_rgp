<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $post_id
 * @property integer $topic_id
 * @property integer $user_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $tags
 * @property integer $number_of_views
 * @property integer $number_of_likes
 * @property integer $number_of_dislikes
 * @property integer $number_of_comments
 * @property string $created_date
 * @property string $is_allow_comment
 * @property string $is_private
 * @property string $status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'user_id', 'title', 'slug', 'content', 'tags', 'number_of_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments', 'created_date', 'is_allow_comment', 'is_private', 'status'], 'required'],
            [['topic_id', 'user_id', 'number_of_views', 'number_of_likes', 'number_of_dislikes', 'number_of_comments'], 'integer'],
            [['content', 'is_allow_comment', 'is_private', 'status'], 'string'],
            [['created_date'], 'safe'],
            [['title', 'slug', 'tags'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'topic_id' => 'Topic ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'content' => 'Content',
            'tags' => 'Tags',
            'number_of_views' => 'Number Of Views',
            'number_of_likes' => 'Number Of Likes',
            'number_of_dislikes' => 'Number Of Dislikes',
            'number_of_comments' => 'Number Of Comments',
            'created_date' => 'Created Date',
            'is_allow_comment' => 'Is Allow Comment',
            'is_private' => 'Is Private',
            'status' => 'Status',
        ];
    }
}
