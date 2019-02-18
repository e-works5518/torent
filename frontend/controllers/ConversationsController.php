<?php

namespace frontend\controllers;

use backend\components\Helper;
use backend\models\User;
use common\models\Conversations;
use common\models\GoalsFeedback;
use common\models\ImpactFeedback;
use common\models\Years;
use Yii;
use common\models\BehavioralFeedback;
use common\models\search\BehavioralFeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BehavioralFeedbackController implements the CRUD actions for BehavioralFeedback model.
 */
class ConversationsController extends Controller
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
    public function actionIndex($year)
    {
        $model = new Conversations();
        if (Yii::$app->request->isPost) {
            $model->attachment_f = UploadedFile::getInstance($model, 'attachment_f');
            $u = $model->updateAttach();
            if (!empty($u)) {
                $model->attachment = $u;
            }
            $model->year = Years::GetYearIdByYear($year);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

        }
        return $this->render('index', [
            'year' => $year,
            'model' => $model,
            'users' => User::GetUsersWhichManagerI(),
            'received' => Conversations::GetReceivedConversations($year),
            'provided' => Conversations::GetProvidedConversations($year),
        ]);

    }

    public function actionDelete($id)
    {
        $model = Conversations::findOne($id);
        if ($model->manager_id == Yii::$app->user->getId()) {
            if ($model->status > 1) {
                $model->status = Conversations::STATUS_ALL_DELETED;
            } else {
                $model->status = Conversations::STATUS_DELETED_MANAGER;
            }
        } else {
            if ($model->status > 1) {
                $model->status = Conversations::STATUS_ALL_DELETED;
            } else {
                $model->status = Conversations::STATUS_DELETED_USER;
            }
        }
//        Helper::DDD($model);
//        die;
        $model->save();
        Yii::$app->session->setFlash('success', "Deleted...", true);
        return $this->redirect(['index']);
    }

}
