<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "keluhan".
 *
 * @property integer $noKeluhan
 * @property integer $NP
 * @property string $subject
 * @property string $pesan
 *
 * @property Siswa $nP
 */
class Keluhan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keluhan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NP', 'subject', 'pesan'], 'required'],
            [['NP'], 'integer'],
            [['pesan'], 'string'],
            [['subject'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'noKeluhan' => 'No Keluhan',
            'NP' => 'Np',
            'subject' => 'Subject',
            'pesan' => 'Pesan',
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
