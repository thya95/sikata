<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $alamat;
    public $namaDpn;
    public $namaBlkg;
    public $tlpRumah;
    public $noHP;
    public $tpt_lahir;
    public $tgl_lahir;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required', 'message' => 'harus diisi'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['alamat', 'required'],
            ['alamat', 'string', 'max' => 255],

            ['namaDpn', 'required'],
            ['namaDpn', 'string', 'max' => 100],

            ['namaBlkg', 'required'],
            ['namaBlkg', 'string', 'max' => 100],

            ['tlpRumah', 'string', 'max' => 100],

            ['noHP', 'string', 'max' => 100],

            ['tgl_lahir', 'string', 'max' => 100],

            ['tpt_lahir', 'string', 'max' => 100],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->namaDpn = $this->namaDpn;
        $user->namaBlkg = $this->namaBlkg;
        $user->alamat = $this->alamat;
        $user->tlpRumah = $this->tlpRumah;
        $user->noHP = $this->noHP;
        $user->tpt_lahir = $this->tpt_lahir;
        $user->tgl_lahir = $this->tgl_lahir;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
