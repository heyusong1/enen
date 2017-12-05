<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pinglun".
 *
 * @property integer $id
 * @property string $user
 * @property string $password
 */
class Pinglun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pinglun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'password' => 'Password',
        ];
    }
}
