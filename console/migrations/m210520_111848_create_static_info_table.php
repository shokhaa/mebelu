<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%static_info}}`.
 */
class m210520_111848_create_static_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%static_info}}', [
            'id' => $this->primaryKey(),
            'phone_number' => $this->string()->defaultValue('+998777777777'),
            'location' => $this->string(),
            'logo_photo' => $this->string()->defaultValue('logo.png'),
            'instagram_profile' => $this->string(),
            'telegram_profile' => $this->string(),
            'facebook_profile' => $this->string(),
            'youtube_profile' => $this->string(),
            'address' => $this->text(),
            'slider_photo1' => $this->string(),
            'slider_photo2' => $this->string(),
            'working_time' => $this->text(),
            'email' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%static_info}}');
    }
}
