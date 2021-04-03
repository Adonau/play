<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "index_page".
 *
 * @property int $id
 * @property string|null $h1_title
 * @property string|null $link_text
 * @property string|null $intro_text
 */
class IndexPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'index_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intro_text'], 'string'],
            [['h1_title', 'link_text'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'h1_title' => 'H1 Заголовок',
            'link_text' => 'Текс ссылки',
            'intro_text' => 'Интро текст',
        ];
    }
}
