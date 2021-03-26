<?php

namespace backend\models;

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
	
	public $file;
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
            [['title', 'text','sort_order'], 'required'],
            [['text'], 'string'],
            [['sort_order'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
             'title' => 'Заголовок',
            'text' => 'Текст',
            'image' => 'Изображение',
			'file'=>'Изображение',
           
            'sort_order' => 'Порядок сортировки',
        ];
    }
	

	
		public function afterFind() {
		if ($this->image) {
		$this->image = "../../frontend/web/images/example/".$this->image;
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
