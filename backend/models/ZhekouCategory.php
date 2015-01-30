<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_zhekou_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort_order
 */
class ZhekouCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_zhekou_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort_order'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sort_order' => 'Sort Order',
        ];
    }
}
