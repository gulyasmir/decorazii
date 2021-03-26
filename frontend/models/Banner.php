<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deco_banner".
 *
 * @property integer $id
 * @property string $image
 * @property string $text
 * @property integer $sort_order
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deco_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'text', 'sort_order'], 'required'],
            [['sort_order'], 'integer'],
            [['image', 'text'], 'string', 'max' => 255]
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
            'text' => 'Text',
            'sort_order' => 'Sort Order',
        ];
    }
	
	
	
		public function afterFind() {
		if ($this->image) {
		$this->image = "/frontend/web/images/banners/".$this->image;
	} else 	$this->image = "/frontend/web/images/nofoto.jpg";
	}
	
}
