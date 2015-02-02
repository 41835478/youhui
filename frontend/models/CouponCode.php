<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_coupon_code".
 *
 * @property string $y_id
 * @property string $title
 * @property string $m_id
 * @property string $m_name
 * @property integer $c_type
 * @property double $money_max
 * @property double $money_reduce
 * @property double $money_amount
 * @property integer $expiry_type
 * @property string $expiry
 * @property integer $price_type
 * @property double $price
 * @property string $amount
 * @property string $fetched_amount
 * @property integer $sort_order
 * @property integer $is_active
 * @property string $addtime
 */
class CouponCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_coupon_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['m_id', 'c_type', 'expiry_type', 'expiry', 'price_type', 'amount', 'fetched_amount', 'sort_order', 'is_active', 'addtime'], 'integer'],
            [['money_max', 'money_reduce', 'money_amount', 'price'], 'number'],
            [['title'], 'string', 'max' => 100],
            [['m_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'y_id' => 'Y ID',
            'title' => 'Title',
            'm_id' => 'M ID',
            'm_name' => 'M Name',
            'c_type' => 'C Type',
            'money_max' => 'Money Max',
            'money_reduce' => 'Money Reduce',
            'money_amount' => 'Money Amount',
            'expiry_type' => 'Expiry Type',
            'expiry' => 'Expiry',
            'price_type' => 'Price Type',
            'price' => 'Price',
            'amount' => 'Amount',
            'fetched_amount' => 'Fetched Amount',
            'sort_order' => 'Sort Order',
            'is_active' => 'Is Active',
            'addtime' => 'Addtime',
        ];
    }
}
