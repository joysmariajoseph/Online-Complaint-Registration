<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "INFO".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $dob
 */
class info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'INFO';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob'], 'required'],
            [['age'], 'integer'],
            [['dob'], 'safe'],
            [['name'], 'string', 'max' => 250],
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
            'age' => 'Age',
            'dob' => 'Dob',
        ];
    }
}
