<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deco_bottom".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $sort_order
 */
class Bottom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deco_bottom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'sort_order'], 'required'],
            [['text'], 'string'],
            [['sort_order'], 'integer'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'sort_order' => 'Sort Order',
        ];
    }
}
