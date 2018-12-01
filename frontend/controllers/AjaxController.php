<?php

namespace frontend\controllers;


use common\models\Behavioral;
use common\models\BehavioralFeedback;
use common\models\UserBehavioral;
use Yii;
use yii\web\Controller;
use \yii\web\Response;


/**
 * UserController implements the CRUD actions for User model.
 */
class AjaxController extends Controller
{

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }


    public function actionGetAllBehs()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_HTML;
            $this->layout = false;
            return $this->render('behavioral');
        }
    }


    public function actionSaveUserCommentByBehId()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post)) {
                return UserBehavioral::SaveUserComment($post['id'], $post['comment']);
            }
        }
    }

    public function actionBehRequestFeedback()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post)) {
                return BehavioralFeedback::BehRequestFeedback($post['manager_id'], $post['beh_id']);
            }
        }
    }

    public function actionGetObjectDataByTypeById()
    {
        if (Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            $post = Yii::$app->request->post();
            if (!empty($post)) {
                if ($post['type'] == 'goal') {
                    return '';
                } else {
                    return UserBehavioral::GetBehavioralByUserId($post['behavioral_id'], $post['user_id']);
                }

            }
        }
    }
}
