<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_mall_zhekou".
 *
 * @property string $id
 * @property integer $cate_id
 * @property string $m_id
 * @property string $m_name
 * @property string $title
 * @property string $gourl
 * @property string $description
 * @property string $logo
 * @property integer $sort_order
 * @property double $price
 * @property string $addtime
 * @property integer $use_coupon
 * @property integer $exprity
 */
class DbsMallZhekou extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_mall_zhekou';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'm_id', 'sort_order', 'addtime', 'use_coupon', 'exprity'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['m_name', 'title'], 'string', 'max' => 200],
            [['gourl'], 'string', 'max' => 255],
            [['logo'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate_id' => 'Cate ID',
            'm_id' => 'M ID',
            'm_name' => 'M Name',
            'title' => 'Title',
            'gourl' => 'Gourl',
            'description' => 'Description',
            'logo' => 'Logo',
            'sort_order' => 'Sort Order',
            'price' => 'Price',
            'addtime' => 'Addtime',
            'use_coupon' => 'Use Coupon',
            'exprity' => 'Exprity',
        ];
    }
}
