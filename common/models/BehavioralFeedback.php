<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "behavioral_feedback".
 *
 * @property int $id
 * @property int $user_id
 * @property int $behavioral_id
 * @property int $manager_id
 * @property int $status
 * @property int $state
 * @property string $comment
 * @property string $date
 */
class BehavioralFeedback extends \yii\db\ActiveRecord
{
    const STATE_UPCOMING = 0;
    const STATE_END = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'behavioral_feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'behavioral_id', 'manager_id', 'status', 'state'], 'integer'],
            [['comment'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'behavioral_id' => 'Behavioral ID',
            'manager_id' => 'Manager ID',
            'status' => 'Status',
            'comment' => 'Comment',
            'date' => 'Date',
            'state' => 'State',
        ];
    }

    public static function GetCurrentUserFellByBehId($behavioral_id)
    {
        return (new \yii\db\Query())
            ->select(
                [
                    'bf.*',
                    'u.*'
                ])
            ->from('behavioral_feedback as bf')
            ->leftJoin(\backend\models\User::tableName() . ' u', 'u.id = bf.manager_id')
            ->where(['user_id' => Yii::$app->user->getId(), 'behavioral_id' => $behavioral_id])
            ->all();
    }

    public static function BehRequestFeedback($manager_id, $behavioral_id)
    {
        $m = self::findOne(['user_id' => Yii::$app->user->getId(), 'manager_id' => $manager_id, 'behavioral_id' => $behavioral_id]);
        if (empty($m)) {
            $model = new self();
            $model->user_id = Yii::$app->user->getId();
            $model->manager_id = $manager_id;
            $model->behavioral_id = $behavioral_id;
            $model->state = self::STATE_UPCOMING;
            return $model->save();
        }
        return true;
    }

    public static function GetCurrentUserFeedback()
    {
        return (new \yii\db\Query())
            ->select(
                [
                    'bf.*',
                    'u.id as u_id',
                    'u.username'
                ])
            ->from('behavioral_feedback as bf')
            ->leftJoin(\backend\models\User::tableName() . ' u', 'u.id = bf.manager_id')
            ->where(['manager_id' => Yii::$app->user->getId(), 'state' => self::STATE_UPCOMING])
            ->all();
    }

    public static function GetCurrentUserFeedbackProvided()
    {
        return (new \yii\db\Query())
            ->select(
                [
                    'bf.*',
                    'u.id as u_id',
                    'u.username'
                ])
            ->from('behavioral_feedback as bf')
            ->leftJoin(\backend\models\User::tableName() . ' u', 'u.id = bf.manager_id')
            ->where(['manager_id' => Yii::$app->user->getId(), 'state' => self::STATE_END])
            ->all();
    }
}
