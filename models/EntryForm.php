<?php

/**
 * Description of EntryForm
 *
 * @author TNChalise <teknarayanchalise@lftechnology.com>
 * @created_on : 12 Dec, 2014, 2:14:59 PM
 * @package 

 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{

    public $email;
    public $username;

    public function rules()
    {

        return [
            [['username', 'email'], 'required'],
            ['email', 'email'],
            ['username', 'validateUsername']
        ];
    }

    public function validateUsername($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if (!ctype_alnum($this->username)) {
                $this->addError($attribute, 'Not Alphanumeric');
            }
        }
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'username' => 'Username'
        ];
    }

}
