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

    public static function SandFeedbackAcceptEmail($user_id)
    {
        if (!empty($user_id)) {
            $user = User::GetUserById($user_id);
            $manager = User::GetUserById(\Yii::$app->user->getId());
            \Yii::$app->mailer
                ->compose([
                    'html' => 'feedback_accept',
                    'text' => 'feedback_accept'
                ], [
                    'user' => $manager,
                ])
                ->setFrom([\Yii::$app->params['supportEmail'] => 'GT myPerformance'])
                ->setTo($user->email)
                ->setSubject($manager->first_name . ' ' . $manager->last_name . '  gave you a feedback')
                ->send();

        }
        return true;
    }

    public static function SandNewGoal($goal)
    {
        $user = User::GetUserById(\Yii::$app->user->getId());
        $manager = User::GetUserById(\Yii::$app->user->identity->manager_id);
        return \Yii::$app->mailer
            ->compose([
                'html' => 'new_goal',
                'text' => 'new_goal'
            ], [
                'user' => $user,
                'goal' => $goal,
            ])
            ->setFrom([\Yii::$app->params['supportEmail'] => 'GT myPerformance'])
            ->setTo($manager->email)
            ->setSubject($user->first_name . ' ' . $user->last_name . '  gave you a feedback')
            ->send();


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