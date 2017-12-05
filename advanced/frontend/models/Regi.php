<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "regi".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $passworda
 */
class Regi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['username', 'password', 'passworda'], 'string', 'max' => 255],
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
            'password' => 'Password',
            'passworda' => 'Passworda',
        ];
    }
}
