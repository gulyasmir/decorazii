<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deco_contact".
 *
 * @property integer $id
 * @property string $adress
 * @property string $tel
 * @property string $email
 * @property string $text
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deco_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adress', 'tel', 'email', 'text'], 'required'],
            [['text'], 'string'],
            [['adress', 'tel', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adress' => 'Adress',
            'tel' => 'Tel',
            'email' => 'Email',
            'text' => 'Text',
        ];
    }
}
