<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "approval".
 *
 * @property integer $aid
 * @property string $aname
 */
class Approval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aname'], 'required'],
            [['aname'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => 'Aid',
            'aname' => 'COMPLAINT STATUS',
        ];
    }
}
