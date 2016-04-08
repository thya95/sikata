<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property integer $PID
 * @property string $role
 *
 * @property Kelas[] $kelas
 * @property User $p
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PID', 'role'], 'required'],
            [['PID'], 'integer'],
            [['role'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PID' => 'Pid',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasMany(Kelas::className(), ['PID' => 'PID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(User::className(), ['id' => 'PID']);
    }
}
