<?php

namespace backend\models;

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
	
	public $file;
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
            [[ 'title', 'text'], 'required'],
            [['sort_order'], 'integer'],
            [['image', 'title', 'text'], 'string', 'max' => 255],
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
             'title' => 'Заголовок',
            'text' => 'Текст',
            'sort_order' => 'Порядок сортировки',
        ];
    }
	

	
	public function afterFind() {
		if ($this->image) {
		$this->image = "../../frontend/web/images/galerey/".$this->image;
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
