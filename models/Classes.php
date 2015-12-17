<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_classes".
 *
 * @property integer $id
 * @property string $title
 * @property string $instructor
 * @property string $start_time
 * @property string $end_time
 * @property string $date
 * @property integer $duration
 * @property string $description
 * @property double $price
 * @property integer $school_id
 *
 * @property TblSchool $school
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date','start_time','end_time'], 'safe'],
            [['duration', 'school_id'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['title','instructor','date','start_time','end_time','school_id','duration','price'],'required'],
            [['title', 'instructor'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'instructor' => 'Instructor',
            'date' => 'Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'duration' => 'Duration (in minutes)',
            'description' => 'Description',
            'price' => 'Price',
            'school_id' => 'School',
        ];
    }

    public function extraFields()
    {
        return ['school'];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'school_id']);
    }
}
