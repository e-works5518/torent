<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goals".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $user_comment
 * @property string $date
 */
class Goals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['description', 'user_comment'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'description' => 'Description',
            'user_comment' => 'User Comment',
            'date' => 'Date',
        ];
    }

    public static function getGoalByIdUserId($goal_id, $user_id)
    {
        return (new \yii\db\Query())
            ->select(
                [
                    'goal.*',
                    'u.*',
                ])
            ->from(self::tableName().' goal')
            ->leftJoin(\backend\models\User::tableName() . ' u', 'u.id = goal.user_id')
            ->where(['goal.id' => $goal_id, 'user_id' => $user_id])
            ->one();
    }

}
