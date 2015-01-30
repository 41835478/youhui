<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_admin_users".
 *
 * @property integer $user_id
 * @property string $email
 * @property string $user_name
 * @property string $name
 * @property string $password
 * @property string $last_login
 * @property string $last_ip
 * @property string $msn
 * @property string $qq
 * @property string $tel_phone
 * @property string $mobile_phone
 * @property string $addr
 * @property string $company
 * @property string $company_website
 * @property integer $is_locked
 * @property integer $is_super
 */
class AdminUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_admin_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password', 'msn', 'qq', 'tel_phone', 'mobile_phone', 'addr', 'company', 'company_website'], 'required'],
            [['last_login', 'is_locked', 'is_super'], 'integer'],
            [['email', 'user_name', 'msn'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 32],
            [['last_ip'], 'string', 'max' => 15],
            [['qq', 'tel_phone', 'mobile_phone'], 'string', 'max' => 20],
            [['addr', 'company', 'company_website'], 'string', 'max' => 100]
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
            'user_name' => 'User Name',
            'name' => 'Name',
            'password' => 'Password',
            'last_login' => 'Last Login',
            'last_ip' => 'Last Ip',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'tel_phone' => 'Tel Phone',
            'mobile_phone' => 'Mobile Phone',
            'addr' => 'Addr',
            'company' => 'Company',
            'company_website' => 'Company Website',
            'is_locked' => 'Is Locked',
            'is_super' => 'Is Super',
        ];
    }
}
