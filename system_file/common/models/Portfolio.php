<?php

namespace common\models;

use Yii;
/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string|null $port_link
 * @property string|null $port_img
 * @property string|null $port_desc
 * @property string|null $port_main
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['select_port', 'port_link', 'port_img', 'port_desc', 'port_main'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'select_port' => 'Select Port',
            'port_link' => 'Port Link',
            'port_img' => 'Port Img',
            'port_desc' => 'Port Desc',
            'port_main' => 'Port Main',
        ];
    }
}
