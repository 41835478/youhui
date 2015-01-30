<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_mall_promotion".
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
 * @property string $expiry
 * @property string $addtime
 */
class MallPromotion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_mall_promotion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'm_id', 'sort_order', 'expiry', 'addtime'], 'integer'],
            [['m_name', 'title', 'description', 'logo'], 'required'],
            [['description'], 'string'],
            [['m_name', 'title'], 'string', 'max' => 200],
            [['gourl'], 'string', 'max' => 150],
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
            'expiry' => 'Expiry',
            'addtime' => 'Addtime',
        ];
    }
}
