<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property integer $id
 * @property string $username
 * @property string $option
 * @property string $typep
 * @property string $verify
 * @property string $must
 * @property string $rule
 * @property integer $lenght1
 * @property integer $lenght2
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lenght1', 'lenght2'], 'integer'],
            [['username', 'option', 'typep', 'verify', 'must', 'rule'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'option' => 'Option',
            'typep' => 'Typep',
            'verify' => 'Verify',
            'must' => 'Must',
            'rule' => 'Rule',
            'lenght1' => 'Lenght1',
            'lenght2' => 'Lenght2',
        ];
    }
}
