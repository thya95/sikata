<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property string $mapelID
 * @property string $noBab
 * @property string $judul
 *
 * @property JadwalIntance[] $jadwalIntances
 * @property MataPelajaran $mapel
 */
class Materi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mapelID', 'noBab', 'judul'], 'required'],
            [['mapelID'], 'string', 'max' => 3],
            [['noBab'], 'string', 'max' => 2],
            [['judul'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mapelID' => 'Mapel ID',
            'noBab' => 'No Bab',
            'judul' => 'Judul',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalIntances()
    {
        return $this->hasMany(JadwalIntance::className(), ['mapelID' => 'mapelID', 'noBab' => 'noBab']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(MataPelajaran::className(), ['id' => 'mapelID']);
    }
}
