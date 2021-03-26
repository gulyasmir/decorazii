<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deco_galerey".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $text
 * @property integer $sort_order
 */
class Galerey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deco_galerey';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'title', 'text', 'sort_order'], 'required'],
            [['sort_order'], 'integer'],
            [['image', 'title', 'text'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'text' => 'Text',
            'sort_order' => 'Sort Order',
        ];
    }
	

		public function afterFind() {
		if ($this->image) {
		$this->image = "/frontend/web/images/galerey/".$this->image;
	} else 	$this->image = "/frontend/web/images/nofoto.jpg";
	}
	
	
	
}
