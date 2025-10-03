<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat'], 'required'],
            ['username', 'string', 'min' => 4, 'max' => 16],
            [['password', 'password_repeat'], 'string', 'min' => 8, 'max' => 32],
            [['password_repeat'], 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new User();
        // генерация полей для таблицы user
        $user->username = $this->username;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key     = \Yii::$app->security->generateRandomString();

        // сохранение пользователя в БД
        if($user->save()) {
            return true;
        } else {
            // иначе, сообщение об ошибке
            \Yii::error("User was not saved. ".VarDumper::dumpAsString($user->errors));
            return false;
        }
        
    }
}