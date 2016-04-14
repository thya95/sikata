<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property integer $NP
 * @property string $tesID
 * @property double $presentase
 *
 * @property Siswa $nP
 * @property Tes $tes
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NP', 'tesID', 'presentase'], 'required'],
            [['NP'], 'integer'],
            [['presentase'], 'number'],
            [['tesID'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NP' => 'Np',
            'tesID' => 'Tes ID',
            'presentase' => 'Presentase',
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
    public function getTes()
    {
        return $this->hasOne(Tes::className(), ['id' => 'tesID']);
    }
}
