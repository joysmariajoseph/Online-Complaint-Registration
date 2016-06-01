<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gender".
 *
 * @property integer $gid
 * @property string $gname
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gname'], 'required'],
            [['gname'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gid' => 'gid',
            'gname' => 'GENDER',
        ];
    }
}
