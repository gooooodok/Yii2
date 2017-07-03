<?php

namespace app\controllers;

use Yii;

class PostController extends AppController
{
	public $layout = 'basic';

	public function actionIndex()
	{
		if (Yii::$app->request->isAjax ) {
			debug($_GET);
			return 'index';
		}		
		return $this->render('index');
	}

	public function actionShow()
	{
		return $this->render('show');
	}
}