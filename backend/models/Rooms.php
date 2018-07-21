<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property string $name
 * @property int $reserv
 * @property string $desc
 * @property int $price
 * @property int $guest
 * @property int $square
 */
class Rooms extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'guest', 'square'], 'required'],
            [['reserv', 'price', 'guest', 'square'], 'integer'],
            [['desc'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'reserv' => 'Резерв',
            'desc' => 'Описание',
            'price' => 'Цена',
            'guest' => 'Кол-во гостей',
            'square' => 'Площадь',
            'image' => 'Главная картинка',
            'gallery' => 'Галерея',
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = Yii::getAlias('@frontend') . '/web/upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public function uploadGallery(){
        if($this->validate()){
            foreach($this->gallery as $file){
                $path = Yii::getAlias('@frontend') . '/web/upload/store/' . $this->image->baseName . '.' . $this->image->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }else{
            return false;
        }
    }
}
