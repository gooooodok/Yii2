<?php

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{
	public $layout = 'basic';

	public function actionIndex()
	{
		if (Yii::$app->request->isAjax ) {
			return 'index';
		}

		$model = new TestForm();

		$this->view->title = 'Все статьи';	
		return $this->render('index', compact('model'));
	}

	public function actionShow()
	{
		$this->view->title = 'Одна статья';
		$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевые слова']);
		$this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы']);
		return $this->render('show');
	}
}