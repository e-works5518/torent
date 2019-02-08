<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "impact".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $color
 * @property string $icon
 * @property string $date
 * @property string $icon_f
 * @property string $year
 */
class Impact extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $icon_f;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'impact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'integer'],
            [['description'], 'string'],
            [['icon_f'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png'],
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
            'attachment' => 'Icon',
            'year' => 'Year',
        ];
    }

    public function uploadIcon()
    {
        if (!empty($this->icon_f)) {
            $name = substr(md5(microtime(true)), 0, 5) . '_' . date('d-m-Y') . '.' . $this->icon_f->extension;
            $this->icon_f->saveAs('../../frontend/web/logos/' . $name);
            return $name;
        } else {
            return false;
        }
    }

    public static function GetAll($year)
    {
        return self::find()->asArray()->where(['year' => Years::GetYearIdByYear($year)])->all();
    }

    public static function GetOneById($id)
    {
        return self::findOne($id);
    }
}
