<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
	public $layout = 'basic';

	public function actionIndex()
	{
		if (Yii::$app->request->isAjax ) {
			debug($_POST);
			return 'index';
		}
		$this->view->title = 'Все статьи';	
		return $this->render('index');
	}

	public function actionShow()
	{
		$this->view->title = 'Одна статья';
		return $this->render('show');
	}
}