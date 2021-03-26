<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deco_example".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $text
 * @property integer $sort_order
 */
class Example extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deco_example';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'text', 'sort_order'], 'required'],
            [['text'], 'string'],
            [['sort_order'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255]
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
            'image' => 'Image',
            'text' => 'Text',
            'sort_order' => 'Sort Order',
        ];
    }
	

	
		public function afterFind() {
		if ($this->image) {
		$this->image = "/frontend/web/images/example/".$this->image;
	} else 	$this->image = "/frontend/web/images/nofoto.jpg";
	}
	
	
}
