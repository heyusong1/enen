<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $username
 * @property string $sex
 * @property integer $age
 * @property string $hobby
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['username', 'sex', 'hobby'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '姓名',
            'sex' => '性别',
            'age' => '年龄',
            'hobby' => '爱好',
        ];
    }
}
