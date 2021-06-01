<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $image_url
 * @property string|null $slider_title
 * @property string|null $slider_info
 * @property string|null $slider_btn_title
 * @property string|null $slider_btn_link
 * @property string $created_at
 */
class Slider extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url'], 'required'],
            [['created_at'], 'safe'],
            [['image_url', 'slider_title', 'slider_info', 'slider_btn_title', 'slider_btn_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image_url' => Yii::t('app', 'Image Url'),
            'slider_title' => Yii::t('app', 'Slider Title'),
            'slider_info' => Yii::t('app', 'Slider Info'),
            'slider_btn_title' => Yii::t('app', 'Slider Btn Title'),
            'slider_btn_link' => Yii::t('app', 'Slider Btn Link'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}
