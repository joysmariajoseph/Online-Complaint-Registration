<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "complaints".
 *
 * @property integer $cid
 * @property string $cname
 */
class Complaints extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'complaints';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cname'], 'required'],
            [['cname'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'cname' => 'COMPLAINT TYPE',
        ];
    }
}
