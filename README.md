# Rest API configuration in yii2-basic application


Basic Rest API Using Basic Template of Yii2.
Here, I have configured rest api for basic application template in Yii2, hope this will help.

There are several approaches to do the web-service, but I prefer the way of configuring rest with in app modules as following ways.
```php
-@app
    -modules
      -api
        -modules
          -v1 // Prefer way of configuring web services {http://www.example.com/api/v1/someController/someAction}
          -v2 // For future version. v2.0
          
  
  ```        
  Note the api module have nested modules which can be configured by any ways. Either in *config.php* or as in the following.
```php
  class Api extends \yii\base\Module{
    public function init(){
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
```
And with the some url-manager magic, you are done with the rest-confuguration. 
Please see the UserController under 
*app\modules\api\modules\v1\controllers,* 
for the verbs allowed.

### See the following files:

1. app\config\web {Url Manager and module autoloading}
2. app\modules\Api.php {To define nested modules, namespaces}
3. app\modules\api\modules\v1\VersionOne.php
4. app\modules\api\modules\v1\controllers\UserController.php {Api Verb-filtering}










