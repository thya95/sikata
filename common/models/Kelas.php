<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property string $ID
 * @property string $nama
 * @property integer $kapasitas
 * @property string $periode
 * @property integer $PID
 *
 * @property Absensi[] $absensis
 * @property JadwalIntance[] $jadwalIntances
 * @property Pegawai $p
 * @property Siswa[] $siswas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'nama', 'kapasitas', 'periode', 'PID'], 'required'],
            [['kapasitas', 'PID'], 'integer'],
            [['ID'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 3],
            [['periode'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nama' => 'Nama',
            'kapasitas' => 'Kapasitas',
            'periode' => 'Periode',
            'PID' => 'Pid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbsensis()
    {
        return $this->hasMany(Absensi::className(), ['kelasID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalIntances()
    {
        return $this->hasMany(JadwalIntance::className(), ['kelasID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Pegawai::className(), ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(Siswa::className(), ['kelasID' => 'ID']);
    }
}
