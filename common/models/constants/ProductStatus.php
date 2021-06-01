<?php


namespace common\models\constants;


use Yii;

class ProductStatus
{
    const STATUS_SIMPLE = 1;
    const STATUS_FAMOUS = 2;
    const STATUS_NEW = 3;
    const STATUS_SALE = 4;

    public static function getString($role)
    {
        if ($role == self::STATUS_SIMPLE) return Yii::t('app', "Simple");
        if ($role == self::STATUS_FAMOUS) return Yii::t('app', "Famous");
        if ($role == self::STATUS_NEW) return Yii::t('app', "New");
        if ($role == self::STATUS_SALE) return Yii::t('app', "Sale");

        return "Noma'lum";
    }

    public static function getList()
    {
        return [
            self::STATUS_SIMPLE => self::getString(self::STATUS_SIMPLE),
            self::STATUS_FAMOUS => self::getString(self::STATUS_FAMOUS),
            self::STATUS_NEW => self::getString(self::STATUS_NEW),
            self::STATUS_SALE => self::getString(self::STATUS_SALE)
        ];
    }
}
