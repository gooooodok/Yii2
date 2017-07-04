<?php

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
	public $name;
	public $email;
	public $text;

	public function attributeLabels ()
	{
		return [
			'name' => 'Имя',
			'email' => 'E-mail',
			'text' => 'Сообщение'
		];
	}

	public function rules()
	{
		return [
			[ 'name', 'required', 'message' => 'Поле обязательно для заполнения' ],
			[ 'email', 'required', 'message' => 'Поле обязательно для заполнения' ],
		];
	}
}