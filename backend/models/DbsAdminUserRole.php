<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_admin_user_role".
 *
 * @property string $userid
 * @property integer $roleid
 */
class DbsAdminUserRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_admin_user_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'roleid'], 'required'],
            [['userid', 'roleid'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'roleid' => 'Roleid',
        ];
    }
}
