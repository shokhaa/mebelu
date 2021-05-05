<?php


class ProductImage extends \common\models\ProductImage
{
    public function upload()
    {
        if ($this->validate()) {
            $this->image_url->saveAs('uploads/' . $this->image_url->baseName . '.' . $this->image_url->extension);
            return true;
        } else {
            return false;
        }
    }
}