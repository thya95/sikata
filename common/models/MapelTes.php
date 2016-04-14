<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mapel_tes".
 *
 * @property string $tesID
 * @property string $mapelID
 *
 * @property Jawaban[] $jawabans
 * @property MataPelajaran $mapel
 * @property Tes $tes
 */
class MapelTes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mapel_tes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tesID', 'mapelID'], 'required'],
            [['tesID'], 'string', 'max' => 6],
            [['mapelID'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tesID' => 'Tes ID',
            'mapelID' => 'Mapel ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawabans()
    {
        return $this->hasMany(Jawaban::className(), ['mapelID' => 'mapelID', 'tesID' => 'tesID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(MataPelajaran::className(), ['id' => 'mapelID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTes()
    {
        return $this->hasOne(Tes::className(), ['id' => 'tesID']);
    }
}
