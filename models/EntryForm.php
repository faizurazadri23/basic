<?php
namespace app\models;
use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;
    public $alamat;
    public $telpn;

    public function rules()
    {
       return [
            [['name', 'email', 'alamat', 'telpn'], 'required'],
            ['email', 'email']
        ];
    }
}