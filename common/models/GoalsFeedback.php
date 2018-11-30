<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goals_feedback".
 *
 * @property int $id
 * @property int $goal_id
 * @property int $menager_id
 * @property int $status
 * @property string $comment
 * @property string $date
 */
class GoalsFeedback extends \yii\db\ActiveRecord
{
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
            [['goal_id', 'menager_id', 'status'], 'integer'],
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
            'menager_id' => 'Menager ID',
            'status' => 'Status',
            'comment' => 'Comment',
            'date' => 'Date',
        ];
    }
}
