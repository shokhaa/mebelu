<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int|null $sales_procent
 * @property int|null $status
 * @property CategoryProduct[] $categories
 * @property string|null $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    public $relatives;

    public $image_url;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'status'], 'required'],
            [['price', 'sales_procent', 'status'], 'integer'],
            ['sales_procent', 'integer', 'min' => 0, 'max' => 100],
            [['description',], 'string'],

            ['name', 'string', 'max' => 255],
            [['name'], 'unique'],
            [['categories', 'image_url'], 'safe']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'sales_procent' => Yii::t('app', 'Sales Procent'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'categories' => Yii::t('app', 'Categories')
        ];
    }

    public function getProductImages()
    {
        return $this->hasMany(ProductImage::className(), ['product_id', 'id']);
    }

    public function getCategoryProduct()
    {
        return $this->hasMany(CategoryProduct::className(), ['product_id' => 'id']);
    }
}
