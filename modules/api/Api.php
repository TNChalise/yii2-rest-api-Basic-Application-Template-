<?php

namespace app\modules\api;

/**
 * A Parent API Module.
 * This might contains nested modules, as defined in init();
 *
 * @author TNChalise <teknarayanchalise@outlook.com>
 * @created_on : 18 Dec, 2014, 9:41:45 PM
 * @package pp\modules\api\Api
 * @version 1.0
 */
class Api extends \yii\base\Module
{

    public function init()
    {
        parent::init();

        $this->modules = [
            'v1' => [
                // you should consider using a shorter namespace here!
                'class' => 'app\modules\api\modules\v1\VersionOne',
            ],
            'v2' => [
                // you should consider using a shorter namespace here!
                'class' => 'app\modules\api\modules\v2\VersionTwo',
            ],
        ];
    }

}
