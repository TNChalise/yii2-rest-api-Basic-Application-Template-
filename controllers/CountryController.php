<?php

/**
 * Description of CountryController
 *
 * @author TNChalise <teknarayanchalise@outlook.com>
 * @created_on : 12 Dec, 2014, 3:26:07 PM
 * @package 
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Country;
use yii\db\ActiveRecord;
use yii\data\Pagination;

defined('PRE') or define('PRE', '"<pre>"');

class CountryController extends Controller
{

    public function actionIndex()
    {
        $country = new Country();
        
        echo PRE;
        
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        
        $countries = $query->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

    }

}
