<?php
/**
 * Created by PhpStorm.
 * User: Armen
 * Date: 11/20/17
 * Time: 12:00 PM
 */

namespace frontend\components;


use backend\models\User;
use yii\base\Component;

/**
 * Class CheckRules
 * @package frontend\components
 */
class Mail extends Component
{

    public static function SandFeedbackEmail($manager_id, $user_id)
    {
        if (!empty($manager_id)) {
            $user = User::GetUserById($user_id);
            $manager = User::GetUserById($manager_id);
            \Yii::$app->mailer
                ->compose([
                    'html' => 'feedback',
                    'text' => 'feedback'
                ], [
                    'user' => $user,
                    'manager' => $manager
                ])
                ->setFrom([\Yii::$app->params['supportEmail'] => 'GT myPerformance'])
                ->setTo($manager->email)
                ->setSubject($user->first_name . ' ' . $user->last_name . ' wants feedback from you')
                ->send();

        }
        return true;
    }


    public static function SandMail($email = null, $title = '', $text = '')
    {
        return \Yii::$app
            ->mailer
            ->compose()
            ->setFrom([\Yii::$app->params['supportEmail'] => 'GT Pipeline'])
            ->setTo($email)
            ->setSubject($title)
            ->setTextBody($text)
            ->send();
    }
}