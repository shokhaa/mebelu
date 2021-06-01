<?php

namespace common\models;


/**
 * This is the model class for table "static_info".
 *
 * @property int $id
 * @property string|null $phone_number
 * @property string|null $location
 * @property string|null $logo_photo
 * @property string|null $instagram_profile
 * @property string|null $telegram_profile
 * @property string|null $facebook_profile
 * @property string|null $youtube_profile
 * @property string|null $address
 * @property string|null $working_time
 * @property string|null $email
 */
class StaticInfo extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'static_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'working_time'], 'string'],
            [['phone_number', 'location', 'logo_photo', 'instagram_profile', 'telegram_profile', 'facebook_profile', 'youtube_profile', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Phone Number',
            'location' => 'Location',
            'logo_photo' => 'Logo Photo',
            'instagram_profile' => 'Instagram Profile',
            'telegram_profile' => 'Telegram Profile',
            'facebook_profile' => 'Facebook Profile',
            'youtube_profile' => 'Youtube Profile',
            'address' => 'Address',
            'working_time' => 'Working Time',
            'email' => 'Email',
        ];
    }
}
