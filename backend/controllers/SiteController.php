<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['start', 'login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action){
                            return !User::isUserAdmin(Yii::$app->user->id);
                        }
                    ], 

                     [
                        'actions' => ['homepage'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                     
                ],
            ],
            /*'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionStart () {
        $this->layout='register';
        return $this->render('index');
    }


     public function actionHomepage() {

        return $this->render('homepage');
    }

    public function actionLogin()
    {

        $this->layout='register';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
         //   return $this->goBack();
             return $this->redirect(['homepage']);
        } else {
            return $this->render( 'login', [ 
                'model' => $model,
            ]);
        }
    }

     public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

/*    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Yii::$app->user->loginUrl);
    }

    public function beforeAction ($action) {
        if(parent::beforeAction($action)) {
            if($action->id=='login')
                $this->layout='login';
            return true;
        } else {
            return false;
        }
    }
    */
}
