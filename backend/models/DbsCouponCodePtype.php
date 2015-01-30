<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_coupon_code_ptype".
 *
 * @property integer $p_id
 * @property string $price_type
 */
class DbsCouponCodePtype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_coupon_code_ptype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'price_type' => 'Price Type',
        ];
    }
}
