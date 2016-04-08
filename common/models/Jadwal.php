<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property string $id
 * @property string $nama
 * @property string $jam_mulai
 * @property string $jam_selesai
 *
 * @property JadwalIntance[] $jadwalIntances
 * @property Siswa[] $siswas
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'jam_mulai', 'jam_selesai'], 'required'],
            [['jam_mulai', 'jam_selesai'], 'safe'],
            [['id'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalIntances()
    {
        return $this->hasMany(JadwalIntance::className(), ['jadwalID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswas()
    {
        return $this->hasMany(Siswa::className(), ['jadwalID' => 'id']);
    }
}
