<?php

namespace app\controllers;

class PostController extends AppController
{
	public function actionIndex()
	{
		return $this->render('test');
	}

	public function actionShow()
	{
		/* Делаем уникальный шаблон только для страницы */
		$this->layout = 'basic';
		return $this->render('show');
	}
}