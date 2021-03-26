<?php

namespace backend\models;

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
	public $file;
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
            [[ 'text'], 'required'],
            [['sort_order'], 'integer'],
            [['image', 'text'], 'string', 'max' => 255],
			[['file'], 'file', 'extensions' =>'jpg, png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Изображение',
			'file'=>'Изображение',
            'text' => 'Текст',
            'sort_order' => 'Порядок сортировки',
        ];
    }
	
	public function afterFind() {
		if ($this->image) {
		$this->image = "../../frontend/web/images/banners/".$this->image;
	} else 	$this->image = "../../frontend/web/images/nofoto.jpg";
	}
	
	public function beforeSave($model)
	{
    if (parent::beforeSave($model)) {
   $path_parts = pathinfo($this->image);
		$this->image = $path_parts['basename']; 
		
	return true;
    }
    return false;
}
}
