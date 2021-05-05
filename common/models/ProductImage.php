<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_image".
 *
 * @property int $id
 * @property string $image_url
 * @property int|null $product_id
 */
class ProductImage extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_url', 'product_id'], 'required'],
            [['product_id'], 'integer'],
            [['image_url'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg,png,gif' ],
            [['image_url'], 'string', 'max' => 255],
            [['image_url'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image_url' => Yii::t('app', 'Image url'),
            'product_id' => Yii::t('app', 'Product ID'),
        ];
    }
    public function getProduct(){
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
