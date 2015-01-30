<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_article_category".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $sort_order
 */
class DbsArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_name'], 'required'],
            [['sort_order'], 'integer'],
            [['cate_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => 'Cate ID',
            'cate_name' => 'Cate Name',
            'sort_order' => 'Sort Order',
        ];
    }
}
