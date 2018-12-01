<?php

namespace frontend\controllers;

use backend\models\User;
use Yii;
use common\models\Behavioral;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * BehavioralController implements the CRUD actions for Behavioral model.
 */
class BehavioralController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => [],
                'rules' => [
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];
    }

    /**
     * Lists all Behavioral models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Behavioral();

        return $this->render('index', [
            'model' => $model,
            'users' => User::GetUsers()
        ]);
    }

}
