<?php

namespace frontend\controllers;

use Yii;
use common\models\Goals;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GoalsController implements the CRUD actions for Goals model.
 */
class GoalsController extends Controller
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
     * Lists all Goals models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Goals();

        return $this->render('index',[
            'model' => $model
        ]);
    }
}
