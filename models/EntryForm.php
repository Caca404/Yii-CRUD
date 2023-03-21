<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            /**
             * First argument => variables
             * Second argument => filter's type
             */
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}