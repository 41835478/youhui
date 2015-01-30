<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dbs_article".
 *
 * @property integer $article_id
 * @property integer $cate_id
 * @property string $title
 * @property string $alias
 * @property string $content
 * @property string $addtime
 */
class DbsArticle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dbs_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_id', 'addtime'], 'integer'],
            [['title', 'alias', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['alias'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'cate_id' => 'Cate ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'content' => 'Content',
            'addtime' => 'Addtime',
        ];
    }
}
