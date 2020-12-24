<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $post_id
 * @property string $title
 * @property string $text
 * @property string $date
 * @property string $author
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'date', 'author'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'title' => 'Title',
            'text' => 'Text',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
