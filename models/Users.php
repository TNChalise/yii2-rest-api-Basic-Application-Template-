<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $secret_key
 * @property string $username
 * @property integer $user_device_id
 * @property string $email
 * @property integer $role_id
 * @property string $registered_date
 * @property integer $is_active
 * @property string $last_logged_in
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['secret_key', 'username', 'user_device_id', 'email', 'role_id', 'registered_date', 'is_active'], 'required'],
            [['user_device_id', 'role_id', 'is_active'], 'integer'],
            [['registered_date', 'last_logged_in'], 'safe'],
            [['secret_key', 'username', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'secret_key' => Yii::t('app', 'Key uniquely identifies a user'),
            'username' => Yii::t('app', 'Username'),
            'user_device_id' => Yii::t('app', 'Devices user have'),
            'email' => Yii::t('app', 'Email'),
            'role_id' => Yii::t('app', 'Role ID'),
            'registered_date' => Yii::t('app', 'Application joined date'),
            'is_active' => Yii::t('app', 'Is Active'),
            'last_logged_in' => Yii::t('app', 'TIme stamp for last user logged in'),
        ];
    }
}
