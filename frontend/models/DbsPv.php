<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_pv".
 *
 * @property integer $id
 * @property integer $pv
 * @property string $url
 * @property string $time
 */
class DbsPv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_pv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pv'], 'integer'],
            [['url'], 'string', 'max' => 100],
            [['time'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pv' => 'Pv',
            'url' => 'Url',
            'time' => 'Time',
        ];
    }
}
