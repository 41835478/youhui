<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_admin_role".
 *
 * @property integer $role_id
 * @property string $role_name
 */
class DbsAdminRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_admin_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_name'], 'required'],
            [['role_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'role_name' => 'Role Name',
        ];
    }
}
