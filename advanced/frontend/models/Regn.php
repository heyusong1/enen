<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "regn".
 *
 * @property integer $id
 * @property string $nicheng
 * @property string $shengri
 * @property string $gongzuo
 */
class Regn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nicheng', 'shengri', 'gongzuo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nicheng' => 'Nicheng',
            'shengri' => 'Shengri',
            'gongzuo' => 'Gongzuo',
        ];
    }
}
