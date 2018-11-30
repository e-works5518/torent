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
 * @property string $comment
 * @property string $date
 */
class BehavioralFeedback extends \yii\db\ActiveRecord
{
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
            [['user_id', 'behavioral_id', 'manager_id', 'status'], 'integer'],
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
        ];
    }
}
