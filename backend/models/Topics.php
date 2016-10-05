<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "topics".
 *
 * @property integer $topic_id
 * @property integer $page_id
 * @property string $name
 * @property string $created_date
 * @property string $status
 */
class Topics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'name', 'created_date', 'status'], 'required'],
            [['page_id'], 'integer'],
            [['created_date'], 'safe'],
            [['status'], 'string'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'topic_id' => 'Topic ID',
            'page_id' => 'Page',
            'name' => 'Name',
            'created_date' => 'Created Date',
            'status' => 'Status',
        ];
    }

    public function getPage()
    {
        return $this->hasOne(Pages::className(), ['page_id' => 'page_id']);
    }

}
