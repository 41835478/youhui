<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_consume_records".
 *
 * @property string $id
 * @property string $user_id
 * @property string $type
 * @property string $money_type
 * @property double $amount
 * @property string $addtime
 */
class ConsumeRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_consume_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'addtime'], 'integer'],
            [['type', 'money_type'], 'required'],
            [['type', 'money_type'], 'string'],
            [['amount'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'type' => 'Type',
            'money_type' => 'Money Type',
            'amount' => 'Amount',
            'addtime' => 'Addtime',
        ];
    }
}
