<?php

namespace app\modules\api\modules\v2\controllers;

use Yii;
use app\models\Users;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Description of UserController
 *
 * @author TNChalise <teknarayanchalise@lftechnology.com>
 * @created_on : 18 Dec, 2014, 8:45:10 PM
 * @package 

 */
class UserController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['get'],
                    'view' => ['get'],
                    'create' => ['post'],
                    'update' => ['post'],
                    'delete' => ['delete'],
                ],
            ]
        ];
    }

    public function beforeAction($event)
    {
        $action = $event->id;
        if (isset($this->actions[$action])) {
            $verbs = $this->actions[$action];
        } elseif (isset($this->actions['*'])) {
            $verbs = $this->actions['*'];
        } else {
            return $event->isValid;
        }
        $verb = Yii::$app->getRequest()->getMethod();

        $allowed = array_map('strtoupper', $verbs);

        if (!in_array($verb, $allowed)) {
            $this->getHeader(400);
            echo json_encode(['status' => 0, 'error_code' => 400, 'message' => 'Method not allowed'], JSON_PRETTY_PRINT);
            exit;
        }

        return true;
    }

    public function actionIndex()
    {
        echo json_encode(['status' => 1, 'code' => 200, 'message' => 'Attempt Succcessful'], JSON_PRETTY_PRINT);
    }

    /**
     * Displays a single City model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $model = $this->findModel($id);

        $this->getHeader(200);
        echo json_encode(['status' => 1, 'data' => $model->attributes], JSON_PRETTY_PRINT);
        exit;
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * 
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        } else {

            $this->getHeader(400);
            echo json_encode(['status' => 0, 'error_code' => 400, 'message' => 'Bad request'], JSON_PRETTY_PRINT);
            exit;
            // throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    private function getHeader($status)
    {

        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->getStatusCodeMessage($status);
        $content_type = "application/json; charset=utf-8";

        header($status_header);
        header('Content-type: ' . $content_type);
        header('X-Powered-By: ' . "Nintriva <nintriva.com>");
    }

    private function getStatusCodeMessage($status)
    {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = [
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        ];
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

}
