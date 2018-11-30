<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_behavioral".
 *
 * @property int $id
 * @property int $behavioral_id
 * @property int $user_id
 * @property string $user_comment
 * @property string $date
 */
class UserBehavioral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_behavioral';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['behavioral_id', 'user_id'], 'integer'],
            [['user_comment'], 'string'],
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
            'behavioral_id' => 'Behavioral ID',
            'user_id' => 'User ID',
            'user_comment' => 'User Comment',
            'date' => 'Date',
        ];
    }
}
