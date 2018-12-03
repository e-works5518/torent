<?php

namespace frontend\controllers;

use backend\models\User;
use Yii;
use common\models\Impact;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * ImpactController implements the CRUD actions for Impact model.
 */
class ImpactController extends Controller
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
     * Lists all Impact models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Impact();

        return $this->render('index', [
            'model' => $model,
            'users' => User::GetUsers()
        ]);
    }

}
