<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $page_id
 * @property integer $user_id
 * @property string $title
 * @property string $slug
 * @property integer $menu_order
 * @property string $content
 * @property string $page_template
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $created_date
 * @property string $is_private
 * @property string $status
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'slug', 'menu_order', 'content', 'page_template', 'seo_description', 'seo_keywords', 'created_date', 'is_private', 'status'], 'required'],
            [['user_id', 'menu_order'], 'integer'],
            [['content', 'is_private', 'status'], 'string'],
            [['created_date'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 150],
            [['page_template'], 'string', 'max' => 100],
            [['seo_description', 'seo_keywords'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => 'Page ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'menu_order' => 'Menu Order',
            'content' => 'Content',
            'page_template' => 'Page Template',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'created_date' => 'Created Date',
            'is_private' => 'Is Private',
            'status' => 'Status',
        ];
    }

    public function getTopics()
    {
        return $this->hasMany(Topics::className(), ['page_id' => 'page_id']);
    }
}
