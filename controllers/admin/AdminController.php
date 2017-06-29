<?php

namespace app\controllers\admin;

use yii\web\controller;

class AdminController extends AppController
{
	public function actionIndex()
	{
		return $this->render('admin');
	}
}