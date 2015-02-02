<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_friend_link".
 *
 * @property integer $link_id
 * @property string $site_name
 * @property integer $position_id
 * @property integer $link_type
 * @property string $link_url
 * @property integer $sort_order
 * @property string $link_code
 */
class DbsFriendLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_friend_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name', 'position_id', 'link_type', 'link_url', 'link_code'], 'required'],
            [['position_id', 'link_type', 'sort_order'], 'integer'],
            [['site_name'], 'string', 'max' => 100],
            [['link_url'], 'string', 'max' => 200],
            [['link_code'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link_id' => 'Link ID',
            'site_name' => 'Site Name',
            'position_id' => 'Position ID',
            'link_type' => 'Link Type',
            'link_url' => 'Link Url',
            'sort_order' => 'Sort Order',
            'link_code' => 'Link Code',
        ];
    }
}
