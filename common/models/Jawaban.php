<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jawaban".
 *
 * @property string $tesID
 * @property string $mapelID
 * @property string $id
 * @property integer $NP
 * @property integer $benar
 * @property integer $salah
 * @property integer $kosong
 * @property double $nilaiMP
 *
 * @property Siswa $nP
 * @property MapelTes $mapel
 */
class Jawaban extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jawaban';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tesID', 'mapelID', 'id', 'NP', 'benar', 'salah', 'kosong'], 'required'],
            [['NP', 'benar', 'salah', 'kosong'], 'integer'],
            [['nilaiMP'], 'number'],
            [['tesID', 'id'], 'string', 'max' => 6],
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
            'id' => 'ID',
            'NP' => 'Np',
            'benar' => 'Benar',
            'salah' => 'Salah',
            'kosong' => 'Kosong',
            'nilaiMP' => 'Nilai Mp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNP()
    {
        return $this->hasOne(Siswa::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(MapelTes::className(), ['mapelID' => 'mapelID', 'tesID' => 'tesID']);
    }
}
