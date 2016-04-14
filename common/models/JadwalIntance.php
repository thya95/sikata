<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jadwal_intance".
 *
 * @property string $jadwalID
 * @property string $kelasID
 * @property string $mapelID
 * @property string $noBab
 * @property string $tanggal
 * @property string $noSesi
 * @property string $sesiAwal
 * @property string $sesiAkhir
 * @property string $pengajar
 * @property string $pengganti
 *
 * @property Jadwal $jadwal
 * @property Materi $mapel
 * @property Kelas $kelas
 */
class JadwalIntance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal_intance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwalID', 'kelasID', 'mapelID', 'noBab', 'tanggal', 'noSesi', 'sesiAwal', 'sesiAkhir', 'pengajar'], 'required'],
            [['tanggal', 'sesiAwal', 'sesiAkhir'], 'safe'],
            [['jadwalID', 'kelasID'], 'string', 'max' => 5],
            [['mapelID', 'noSesi'], 'string', 'max' => 3],
            [['noBab'], 'string', 'max' => 2],
            [['pengajar', 'pengganti'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jadwalID' => 'Jadwal ID',
            'kelasID' => 'Kelas ID',
            'mapelID' => 'Mapel ID',
            'noBab' => 'No Bab',
            'tanggal' => 'Tanggal',
            'noSesi' => 'No Sesi',
            'sesiAwal' => 'Sesi Awal',
            'sesiAkhir' => 'Sesi Akhir',
            'pengajar' => 'Pengajar',
            'pengganti' => 'Pengganti',
        ];
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
    public function getMapel()
    {
        return $this->hasOne(Materi::className(), ['mapelID' => 'mapelID', 'noBab' => 'noBab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['ID' => 'kelasID']);
    }
}
