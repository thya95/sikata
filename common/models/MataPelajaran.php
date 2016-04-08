<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mata_pelajaran".
 *
 * @property string $id
 * @property string $nama
 *
 * @property MataPelajjaranTes[] $mataPelajjaranTes
 * @property Tes[] $tes
 * @property Materi[] $materis
 */
class MataPelajaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mata_pelajaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama'], 'required'],
            [['id'], 'string', 'max' => 3],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMataPelajjaranTes()
    {
        return $this->hasMany(MataPelajjaranTes::className(), ['mapelID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTes()
    {
        return $this->hasMany(Tes::className(), ['id' => 'tesID'])->viaTable('mata_pelajjaran _tes', ['mapelID' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['mapelID' => 'id']);
    }
}
