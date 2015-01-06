BasicRestAPI
============

Basic Rest API Using Basic Template of Yii2.
Here, i have configured rest api for basic application template in Yii2, hope this will helps.

There are several approaches to do the web-service, but i prefer the way of configuring rest with in app modules as following ways.

-@app
    -modules
      -api
        -modules
          -v1 // Prefer way of configuring web services {http://www.example.com/api/v1/someController/someAction}
          -v2 // For future version. v2.0
          
  Note the api module have nested modules which can be configured by any ways. Either in config.php or as in the following.
  class Api extends \yii\base\Module
{

    public function init()
    {
        parent::init();

        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\modules\v1\VersionOne',
            ],
            'v2' =>[
                'class' => 'app\modules\api\modules\v2\VersionTwo',
            ],
        ];
    }

}

And with the some url-manager magic, you are done with the rest-confuguration. 
Please see the UserController under app\modules\api\modules\v1\controllers, for the verbs allowed.







