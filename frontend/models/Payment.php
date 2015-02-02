<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $pid
 * @property integer $user_id
 * @property string $nick
 * @property string $amount
 * @property integer $status
 * @property string $content
 * @property integer $addtime
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'addtime'], 'integer'],
            [['nick'], 'string', 'max' => 20],
            [['amount'], 'string', 'max' => 10],
            [['content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'user_id' => 'User ID',
            'nick' => 'Nick',
            'amount' => 'Amount',
            'status' => 'Status',
            'content' => 'Content',
            'addtime' => 'Addtime',
        ];
    }
}
