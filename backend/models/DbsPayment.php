<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_payment".
 *
 * @property string $p_id
 * @property string $user_id
 * @property string $nick
 * @property string $out_trade_no
 * @property string $trade_no
 * @property double $amount
 * @property string $content
 * @property string $addtime
 * @property integer $status
 */
class DbsPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'addtime', 'status'], 'integer'],
            [['nick', 'out_trade_no', 'trade_no', 'content'], 'required'],
            [['amount'], 'number'],
            [['nick', 'out_trade_no', 'trade_no'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'user_id' => 'User ID',
            'nick' => 'Nick',
            'out_trade_no' => 'Out Trade No',
            'trade_no' => 'Trade No',
            'amount' => 'Amount',
            'content' => 'Content',
            'addtime' => 'Addtime',
            'status' => 'Status',
        ];
    }
}
