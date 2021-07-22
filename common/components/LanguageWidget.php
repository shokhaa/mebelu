<?php
namespace common\components;
use yii\bootstrap\Widget;
use Yii;

class LanguageWidget extends Widget {
    public $language;
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $baseUrl = Yii::$app->homeUrl;
        $currUrl = Yii::$app->getRequest()->getUrl();
        $this->language = Yii::$app->language;

        $dropdown = '<li class="nav-settings nav-item">
                            <a href="javascript:void(0);" class="nav-settings-value">'.Yii::$app->language.'</a>
                            <ul class="nav-settings-list">';
        foreach (Yii::$app->params['languages'] as $key => $language) {
            $dropdown .= '<li><a href="'. str_replace(Yii::$app->language, $key, $currUrl) . '">' . $language . '</a></li>';
        }

        $dropdown .= '</ul></li>';
        return $dropdown;
    }
}