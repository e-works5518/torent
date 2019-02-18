<?php

namespace frontend\controllers;

use backend\models\User;
use common\models\Development;
use common\models\ManagerDevelopment;
use common\models\UserBehavioral;
use common\models\UserDevelopment;
use common\models\Years;
use Yii;
use common\models\Behavioral;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * BehavioralController implements the CRUD actions for Behavioral model.
 */
class DevelopmentController extends Controller
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
     * @param $year
     * @return string
     */
    public function actionIndex($year)
    {
        $comments = Yii::$app->request->post('comments');
        if ($comments) {
            foreach ($comments as $comment) {
                if (!empty($comment['id'])) {
                    $model = UserDevelopment::findOne($comment['id']);
                    $model->user_comment = $comment['user_comment'];
                    $model->save();
                } else {
                    $model = new UserDevelopment();
                    $model->user_id = Yii::$app->user->getId();
                    $model->development_id = $comment['development_id'];
                    $model->user_comment = $comment['user_comment'];
                    $model->year = Years::GetYearIdByYear($year);
                    $model->save();
                }

            }
        }
        return $this->render('index', [
            'year' => $year,
            'developments' => Development::GetAllByUserIdByYear($year, Yii::$app->user->getId()),
            'manager' => ManagerDevelopment::GetOneByUserIdByManagerId(Yii::$app->user->getId(), Yii::$app->user->identity->manager_id, $year)
        ]);
    }

    public function actionUser($year, $id)
    {
        $comment = Yii::$app->request->post('comment');
        if ($comment) {
            if (!empty($comment['id'])) {
                $model = ManagerDevelopment::findOne($comment['id']);
                $model->manager_comment = $comment['manager_comment'];
                $model->save();
            } else {
                $model = new ManagerDevelopment();
                $model->user_id = $id;
                $model->manager_id = Yii::$app->user->getId();
                $model->manager_comment = $comment['manager_comment'];
                $model->save();
            }
        }
        return $this->render('user-index', [
            'year' => $year,
            'developments' => Development::GetAllByUserIdByYear($year, $id),
            'manager' => ManagerDevelopment::GetOneByUserIdByManagerId($id, Yii::$app->user->getId(), $year)
        ]);
    }
}
