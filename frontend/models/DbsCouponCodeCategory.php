<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_coupon_code_category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort_order
 * @property integer $parent_id
 * @property integer $show_index
 */
class DbsCouponCodeCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_coupon_code_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sort_order', 'parent_id', 'show_index'], 'integer'],
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
            'parent_id' => 'Parent ID',
            'show_index' => 'Show Index',
        ];
    }
}
