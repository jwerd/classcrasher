<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_school".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $postal
 *
 * @property TblClasses[] $tblClasses
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address'], 'string', 'max' => 255],
            [['city'], 'string', 'max' => 128],
            [['state'], 'string', 'max' => 2],
            [['postal'], 'string', 'max' => 10]
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
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'postal' => 'Postal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblClasses()
    {
        return $this->hasMany(TblClasses::className(), ['school_id' => 'id']);
    }
}
