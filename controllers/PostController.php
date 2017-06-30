<?php

namespace app\controllers;

class PostController extends AppController
{
	/* Делаем уникальный шаблон только для этого класса */
	public $layout = 'basic';

	public function actionIndex()
	{
		return $this->render('test');
	}

	public function actionShow()
	{
		return $this->render('show');
	}
}