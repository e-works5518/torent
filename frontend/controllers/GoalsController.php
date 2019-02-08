<?php

namespace frontend\controllers;

use backend\models\User;
use common\models\GoalsFeedback;
use Yii;
use common\models\Goals;
use yii\web\Controller;
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


    public function actionIndex($year)
    {
        return $this->render('index', [
            'goals' => Goals::GetAllByUserByYear($year),
            'year' => $year
        ]);
    }

    /**
     * Lists all Goals models.
     * @return mixed
     */
    public function _actionIndex()
    {
        $goals = Goals::GetAllByUserByYear(Yii::$app->request->get('year'));
        $managers_comments = GoalsFeedback::goalCurrentUserFellByUserlId(Yii::$app->user->identity->getId());

        return $this->render('index', [
            'goals' => $goals,
            'users' => User::GetUsers(),
            'managers_comments' => $managers_comments,
        ]);
    }

    public function actionDelete($id)
    {
        Goals::findOne($id)->delete();
        Yii::$app->session->setFlash('success', "Deleted...", true);
        return $this->redirect(['index/2018']);
    }
}
