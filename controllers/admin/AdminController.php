<?php

namespace app\controllers\admin;

use yii\web\controller;

class AdminController extends controller
{
	public function actionIndex()
	{
		return $this->render('admin');
	}
}