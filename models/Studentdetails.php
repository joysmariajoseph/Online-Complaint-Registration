<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentdetails".
 *
 * @property integer $id
 * @property string $name
 * @property string $class
 * @property string $gender
 */
class Studentdetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'class', 'gender'], 'required'],
            [['name'], 'string', 'max' => 250],
            [['class'], 'string', 'max' => 4],
            [['gender'], 'string', 'max' => 1],
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
            'class' => 'Class',
            'gender' => 'Gender',
        ];
    }
}
