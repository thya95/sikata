<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tes".
 *
 * @property string $id
 * @property string $nama
 * @property string $tanggal
 *
 * @property MataPelajjaranTes[] $mataPelajjaranTes
 * @property MataPelajaran[] $mapels
 * @property Nilai[] $nilais
 * @property Siswa[] $nPs
 */
class Tes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['id'], 'string', 'max' => 6],
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
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMataPelajjaranTes()
    {
        return $this->hasMany(MataPelajjaranTes::className(), ['tesID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapels()
    {
        return $this->hasMany(MataPelajaran::className(), ['id' => 'mapelID'])->viaTable('mata_pelajjaran _tes', ['tesID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['tesID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNPs()
    {
        return $this->hasMany(Siswa::className(), ['NP' => 'NP'])->viaTable('nilai', ['tesID' => 'id']);
    }
}
