<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "absensi".
 *
 * @property string $kelasID
 * @property string $tanggal
 * @property integer $NP
 * @property integer $presensi
 * @property string $keteranan
 *
 * @property Kelas $kelas
 * @property Siswa $nP
 */
class Absensi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'absensi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelasID', 'tanggal', 'NP', 'presensi'], 'required'],
            [['tanggal'], 'safe'],
            [['NP', 'presensi'], 'integer'],
            [['kelasID'], 'string', 'max' => 4],
            [['keteranan'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kelasID' => 'Kelas ID',
            'tanggal' => 'Tanggal',
            'NP' => 'Np',
            'presensi' => 'Presensi',
            'keteranan' => 'Keteranan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['ID' => 'kelasID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNP()
    {
        return $this->hasOne(Siswa::className(), ['NP' => 'NP']);
    }
}
