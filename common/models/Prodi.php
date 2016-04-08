<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property string $id
 * @property string $nama
 * @property string $universitas
 * @property double $PG
 * @property string $Keterangan
 *
 * @property ProdiSiswa[] $prodiSiswas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'universitas', 'PG'], 'required'],
            [['PG'], 'number'],
            [['Keterangan'], 'string'],
            [['id'], 'string', 'max' => 6],
            [['nama'], 'string', 'max' => 50],
            [['universitas'], 'string', 'max' => 30]
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
            'universitas' => 'Universitas',
            'PG' => 'Pg',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdiSiswas()
    {
        return $this->hasMany(ProdiSiswa::className(), ['prodiID' => 'id', 'universitas' => 'universitas']);
    }
}
