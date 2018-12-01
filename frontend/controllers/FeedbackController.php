<?php

namespace frontend\controllers;

use common\models\GoalsFeedback;
use Yii;
use common\models\BehavioralFeedback;
use common\models\search\BehavioralFeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BehavioralFeedbackController implements the CRUD actions for BehavioralFeedback model.
 */
class FeedbackController extends Controller
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
     * Lists all BehavioralFeedback models.
     * @return mixed
     */
    public function actionIndex()
    {

            $goals_feedbacks = GoalsFeedback::GetCurrentUserFeedback();
            $goals_feedbacks_provided = GoalsFeedback::GetCurrentUserFeedbackProvided();
            $behavioral_feedbacks = BehavioralFeedback::GetCurrentUserFeedback();
            $behavioral_feedbacks_provided = BehavioralFeedback::GetCurrentUserFeedbackProvided();

//            $feedbacks = array_merge($array1, $array2);
//            dd($goals_feedbacks);

        return $this->render('index',[
            'goals_feedbacks' => GoalsFeedback::GetCurrentUserFeedback(),
            'goals_feedbacks_provided' => GoalsFeedback::GetCurrentUserFeedbackProvided(),
            'behavioral_feedbacks' => BehavioralFeedback::GetCurrentUserFeedback(),
            'behavioral_feedbacks_provided' => BehavioralFeedback::GetCurrentUserFeedbackProvided()
        ]);
    }

}
