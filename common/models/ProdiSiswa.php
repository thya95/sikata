<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prodi_siswa".
 *
 * @property string $prodiID
 * @property integer $NP
 * @property string $universitas
 *
 * @property Siswa $nP
 * @property Prodi $prodi
 */
class ProdiSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prodi_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prodiID', 'NP', 'universitas'], 'required'],
            [['NP'], 'integer'],
            [['prodiID'], 'string', 'max' => 6],
            [['universitas'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prodiID' => 'Prodi ID',
            'NP' => 'Np',
            'universitas' => 'Universitas',
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
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['id' => 'prodiID', 'universitas' => 'universitas']);
    }
}
