<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cid
 * @property string $vehicle
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
            [['name', 'cid', 'vehicle'], 'required'],
            [['cid'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['vehicle'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cid' => 'Country',
            'vehicle' => 'Vehicle',
        ];

    }
    public function getCountry()
    {
        return $this->hasOne(Countries::className(),['cid'=>'cid']);
    }
}

