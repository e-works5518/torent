<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "behavioral".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $color
 * @property string $icon
 * @property string $date
 */
class Behavioral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'behavioral';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date'], 'safe'],
            [['title', 'color', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'color' => 'Color',
            'icon' => 'Icon',
            'date' => 'Date',
        ];
    }
}
