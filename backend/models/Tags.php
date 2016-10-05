<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property integer $tag_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $created_date
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'description', 'created_date'], 'required'],
            [['created_date'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['slug'], 'string', 'max' => 120],
            [['description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => 'Tag ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'created_date' => 'Created Date',
        ];
    }
}
