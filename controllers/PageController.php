<?php

namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
	public function actionPage()
    {
        return $this->render('page');
    }
}