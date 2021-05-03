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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['sales_procent', 'status'], 'integer'],
            [['description'], 'string'],
            [['name', 'price'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['price'], 'unique'],
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
        ];
    }
}
