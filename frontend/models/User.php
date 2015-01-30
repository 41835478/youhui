<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_user".
 *
 * @property integer $user_id
 * @property string $email
 * @property string $nick
 * @property string $name
 * @property string $password
 * @property string $last_login
 * @property string $last_ip
 * @property string $msn
 * @property string $qq
 * @property string $tel_phone
 * @property string $mobile_phone
 * @property string $addr
 * @property integer $is_locked
 * @property double $money
 * @property integer $credit
 * @property string $addtime
 * @property string $invite
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password', 'msn', 'qq', 'tel_phone', 'mobile_phone', 'addr'], 'required'],
            [['last_login', 'is_locked', 'credit', 'addtime', 'invite'], 'integer'],
            [['money'], 'number'],
            [['email', 'nick', 'msn'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 32],
            [['last_ip'], 'string', 'max' => 15],
            [['qq', 'tel_phone', 'mobile_phone'], 'string', 'max' => 20],
            [['addr'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'nick' => 'Nick',
            'name' => 'Name',
            'password' => 'Password',
            'last_login' => 'Last Login',
            'last_ip' => 'Last Ip',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'tel_phone' => 'Tel Phone',
            'mobile_phone' => 'Mobile Phone',
            'addr' => 'Addr',
            'is_locked' => 'Is Locked',
            'money' => 'Money',
            'credit' => 'Credit',
            'addtime' => 'Addtime',
            'invite' => 'Invite',
        ];
    }
}
