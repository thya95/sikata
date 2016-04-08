<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orang_tua".
 *
 * @property integer $NP
 * @property string $nama_ayah
 * @property string $email_ayah
 * @property string $hp_ayah
 * @property string $nama_ibu
 * @property string $email_ibu
 * @property string $hp_ibu
 *
 * @property Siswa $nP
 */
class OrangTua extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orang_tua';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NP', 'nama_ayah', 'hp_ayah'], 'required'],
            [['NP'], 'integer'],
            [['nama_ayah', 'nama_ibu'], 'string', 'max' => 20],
            [['email_ayah', 'email_ibu'], 'string', 'max' => 35],
            [['hp_ayah', 'hp_ibu'], 'string', 'max' => 13]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NP' => 'Np',
            'nama_ayah' => 'Nama Ayah',
            'email_ayah' => 'Email Ayah',
            'hp_ayah' => 'Hp Ayah',
            'nama_ibu' => 'Nama Ibu',
            'email_ibu' => 'Email Ibu',
            'hp_ibu' => 'Hp Ibu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNP()
    {
        return $this->hasOne(Siswa::className(), ['NP' => 'NP']);
    }
}
