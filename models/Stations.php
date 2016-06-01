<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stations".
 *
 * @property integer $sid
 * @property string $sname
 */
class Stations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sname'], 'required'],
            [['sname'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sid' => 'Sid',
            'sname' => 'STATION NAME',
        ];
    }
}
