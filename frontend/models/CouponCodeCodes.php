<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_coupon_code_codes".
 *
 * @property string $id
 * @property string $c_id
 * @property string $code
 * @property string $user_id
 * @property string $nick
 * @property string $fetch_time
 */
class CouponCodeCodes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_coupon_code_codes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'user_id', 'fetch_time'], 'integer'],
            [['code', 'nick'], 'required'],
            [['code'], 'string', 'max' => 30],
            [['nick'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'c_id' => 'C ID',
            'code' => 'Code',
            'user_id' => 'User ID',
            'nick' => 'Nick',
            'fetch_time' => 'Fetch Time',
        ];
    }
}
