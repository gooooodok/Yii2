<?php

namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
	public function actionPage($name = null)
    {
    	if (!$name) {
    		$name = 'No';
    	}

        $cars = ['Chevrolet Lacetti', 'Ford Focus', 'Toyota Corolla'];
        
        //return $this->render('page', ['cars' => $cars]);
        return $this->render('page', compact('cars', 'name'));
    }
}