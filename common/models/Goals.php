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
}
