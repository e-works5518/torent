<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goals_feedback".
 *
 * @property int $id
 * @property int $goal_id
 * @property int $manager_id
 * @property int $status
 * @property string $comment
 * @property string $date
 * @property int $user_id
 * @property int $state
 */
class GoalsFeedback extends \yii\db\ActiveRecord
{
    const STATE_UPCOMING = 0;
    const STATE_END = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goals_feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'goal_id', 'manager_id', 'status'], 'integer'],
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
            'goal_id' => 'Goal ID',
            'manager_id' => 'Menager ID',
            'status' => 'Status',
            'comment' => 'Comment',
            'date' => 'Date',
            'user_id' => 'User Id',
            'state' => 'State',
        ];
    }

    public static function goalRequestFeedback($manager_id, $goal_id)
    {
        $m = self::findOne(['user_id' => Yii::$app->user->getId(), 'manager_id' => $manager_id, 'goal_id' => $goal_id]);
        if (empty($m)) {
            $model = new self();
            $model->user_id = Yii::$app->user->getId();
            $model->manager_id = $manager_id;
            $model->goal_id = $goal_id;
            $model->state = self::STATE_UPCOMING;
            return $model->save();
        }
        return true;
    }
}
