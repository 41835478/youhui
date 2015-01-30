<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_coupon_code_mall".
 *
 * @property string $m_id
 * @property string $c_id
 * @property string $m_name
 * @property string $name_match
 * @property string $website
 * @property string $gourl
 * @property string $tel
 * @property string $description
 * @property string $how2use
 * @property string $logo
 * @property string $figure_image
 * @property string $sort_order
 * @property string $is_active
 * @property string $hitnum
 * @property string $yesterdaysearched
 * @property string $daysearched
 * @property string $weeksearched
 * @property string $monthsearched
 * @property string $updatetime
 */
class DbsCouponCodeMall extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_coupon_code_mall';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 'sort_order', 'is_active', 'hitnum', 'yesterdaysearched', 'daysearched', 'weeksearched', 'monthsearched', 'updatetime'], 'integer'],
            [['description', 'how2use'], 'string'],
            [['m_name', 'website'], 'string', 'max' => 200],
            [['name_match'], 'string', 'max' => 255],
            [['gourl'], 'string', 'max' => 150],
            [['tel'], 'string', 'max' => 50],
            [['logo', 'figure_image'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'M ID',
            'c_id' => 'C ID',
            'm_name' => 'M Name',
            'name_match' => 'Name Match',
            'website' => 'Website',
            'gourl' => 'Gourl',
            'tel' => 'Tel',
            'description' => 'Description',
            'how2use' => 'How2use',
            'logo' => 'Logo',
            'figure_image' => 'Figure Image',
            'sort_order' => 'Sort Order',
            'is_active' => 'Is Active',
            'hitnum' => 'Hitnum',
            'yesterdaysearched' => 'Yesterdaysearched',
            'daysearched' => 'Daysearched',
            'weeksearched' => 'Weeksearched',
            'monthsearched' => 'Monthsearched',
            'updatetime' => 'Updatetime',
        ];
    }
}
