<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "complainant".
 *
 * @property integer $id
 * @property string $name
 * @property string $dob
 * @property string $address
 * @property string $mail
 * @property integer $contact
 * @property integer $sid
 * @property string $place
 * @property integer $cid
 * @property string $description
 */
class Complainant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'complainant';
    }

    /**
     * @inheritdoc\
     */
    public function rules()
    {
        return [
            [['name', 'dob','gid', 'address', 'mail', 'contact', 'sid', 'place', 'cid', 'description','aid'], 'required'],
            [['dob'], 'safe'],
            [['contact', 'sid', 'cid'], 'integer'],
            [['name', 'mail'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 1000],
            [['place'], 'string', 'max' => 250],
            [['description'], 'string', 'max' => 2000],
        ];
    }
    public function getStations()
    {
        return $this->hasOne(Stations::className(),['sid'=>'sid']);
    }
     public function getComplaints()
    {
        return $this->hasOne(Complaints::className(),['cid'=>'cid']);
    }
     public function getApproval()
    {
        return $this->hasOne(Approval::className(),['aid'=>'aid']);
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dob' => 'Date of birth (yyyy/mm/dd)',
            'gid'=>'Gender',
            'address' => 'Address',
            'mail' => 'Mail id ',
            'contact' => 'Contact',
            'sid' => 'Station Name',
            'place' => 'Place',
            'cid' => 'Complaint Type',
            'description' => 'Description',
            'aid'=>'COMPLAINT STATUS'
        ];
    }
}
