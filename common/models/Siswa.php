<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property integer $NP
 * @property string $status
 * @property string $sekolah
 * @property string $tingkat
 * @property string $program
 * @property string $kelasID
 * @property string $jadwalID
 * @property string $tglRegis
 *
 * @property Absensi[] $absensis
 * @property Jawaban[] $jawabans
 * @property Keluhan[] $keluhans
 * @property Nilai[] $nilais
 * @property Tes[] $tes
 * @property OrangTua[] $orangTuas
 * @property ProdiSiswa[] $prodiSiswas
 * @property Kelas $kelas
 * @property Jadwal $jadwal
 * @property User $nP
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NP', 'status', 'sekolah', 'tingkat', 'program'], 'required'],
            [['NP'], 'integer'],
            [['tglRegis'], 'safe'],
            [['status'], 'string', 'max' => 15],
            [['sekolah'], 'string', 'max' => 50],
            [['tingkat'], 'string', 'max' => 2],
            [['program'], 'string', 'max' => 3],
            [['kelasID'], 'string', 'max' => 4],
            [['jadwalID'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NP' => 'Np',
            'status' => 'Status',
            'sekolah' => 'Sekolah',
            'tingkat' => 'Tingkat',
            'program' => 'Program',
            'kelasID' => 'Kelas ID',
            'jadwalID' => 'Jadwal ID',
            'tglRegis' => 'Tgl Regis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAbsensis()
    {
        return $this->hasMany(Absensi::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJawabans()
    {
        return $this->hasMany(Jawaban::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeluhans()
    {
        return $this->hasMany(Keluhan::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTes()
    {
        return $this->hasMany(Tes::className(), ['id' => 'tesID'])->viaTable('nilai', ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrangTuas()
    {
        return $this->hasMany(OrangTua::className(), ['NP' => 'NP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdiSiswas()
    {
        return $this->hasMany(ProdiSiswa::className(), ['NP' => 'NP']);
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
    public function getJadwal()
    {
        return $this->hasOne(Jadwal::className(), ['id' => 'jadwalID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNP()
    {
        return $this->hasOne(User::className(), ['id' => 'NP']);
    }
}
