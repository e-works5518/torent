<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    const USER_ROLE = 0;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\backend\models\User', 'message' => 'This username has already been.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            [
                'username',
                'match', 'not' => true, 'pattern' => '/[^a-zA-Z0-9_.-]/',
                'message' => 'Invalid characters in username.',
            ],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\backend\models\User', 'message' => 'This email address has already been.'],

            ['password_hash', 'required'],
            ['password_hash', 'string', 'min' => 6],

            [['imageFile'], 'file', 'extensions' => 'png, jpg'],
            [['last_name', 'first_name', 'email'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['last_name', 'first_name', 'password_reset_token', 'email', 'avatar'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'User name',
            'last_name' => 'Last name',
            'first_name' => 'First name',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',


        ];
    }


    /**
     * @return bool|string
     */
    public function upload()
    {
        if (!empty($this->imageFile)) {
            $img_name = microtime(true) . '.' . $this->imageFile->extension;
            if ($this->imageFile->saveAs('../../frontend/web/users/' . $img_name)) {
                return $img_name;
            }
        }
        return false;
    }

    /**
     * @return bool|int|mixed|string
     */
    public function SaveUser()
    {
        if (!$this->validate()) {
            return false;
        }
        $user = new \common\models\User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->avatar = $this->avatar;
        $user->status = $this->status;
        $user->role = self::USER_ROLE;
        $user->setPassword($this->password_hash);
        return $user->save() ? $user->getId() : false;
    }

    /**
     * @param null $id
     * @return bool|int
     */
    public function UpdateUser($id = null)
    {
        if (!empty($id)) {
            if (!$this->validate()) {
                return false;
            }
            $user = self::findOne(['id' => $id]);
            $user->username = $this->username;
            $user->email = $this->email;
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->avatar = $this->avatar;
            $user->status = $this->status;
            return $user->save() ? $user->id : false;
        }
        return false;
    }

    /**
     * @return array
     */
    public static function GetUsers()
    {
        return self::find()->select(["CONCAT(`first_name`,' ',`last_name`) as name", 'id'])->where(['<>','id',Yii::$app->user->identity->getId()])->indexBy('id')->column();
    }

    public static function GetCurrentUserName()
    {
        return self::find()->select(["CONCAT(`first_name`,' ',`last_name`) as name"])->asArray()->where(['id' => Yii::$app->user->getId()])->one()['name'];
    }

    public static function GetSuperUsers()
    {
        return self::find()->select(["CONCAT(`first_name`,' ',`last_name`) as name", 'id'])->indexBy('id')->where(['id' => 1])->column();
    }


    /**
     * @param $id
     * @return static
     */
    public static function GetUserImage($id)
    {
        return self::findOne(['id' => $id]);
    }

    /**
     * @param $id
     * @return static
     */
    public static function GetUserById($id)
    {
        return self::findOne(['id' => $id]);
    }


    public static function GetAllUsers()
    {
        return self::find()->asArray()->all();
    }

    public static function GetUsersByIds($ids = null)
    {
        if (!empty($ids)) {
            return self::find()->where(['id' => $ids])->asArray()->all();
        }
        return [];
    }


    public static function DeleteUserPhoto($user_id = null)
    {
        if (!empty($user_id)) {
            $model = self::findOne(['id' => $user_id]);
            unlink(Yii::getAlias('@frontend') . '/web' . Yii::$app->params['user_url'] . $model['avatar']);
            $model->avatar = null;
            return $model->save();
        }
        return false;
    }

    public static function GetAll()
    {
        return self::find()->asArray()->where(['not in', 'id', Yii::$app->user->getId()])->all();
    }
}
