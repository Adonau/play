<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string|null $title_head
 * @property string|null $canonical
 * @property string|null $h1_title
 * @property string|null $h1_undertitle
 * @property string|null $h1_undertext
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_head', 'h1_undertitle', 'h1_undertext'], 'string'],
            [['page_name', 'canonical', 'h1_title'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_name' => 'Page name',
            'title_head' => 'Title Head',
            'canonical' => 'Canonical',
            'h1_title' => 'H1 Title',
            'h1_undertitle' => 'H1 Undertitle',
            'h1_undertext' => 'H1 Undertext',
        ];
    }
}
