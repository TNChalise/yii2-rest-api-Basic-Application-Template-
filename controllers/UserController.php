<?php

/**
 * Description of UserController
 *
 * @author TNChalise <teknarayanchalise@outlook.com>
 * @created_on : 18 Dec, 2014, 2:52:09 PM
 * @package \app\controllers\UserController
 * @version 1.0
 */

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\helpers\Json;
use yii\db;

class UserController extends ActiveController
{

    public $modelClass = 'app\models\Users';

}
