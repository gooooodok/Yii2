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



    public function actionCarPage()
    {
    	/* 
    		Если нужно назвать екшин несколькими словами, вызов шаблона будет таким http://localhost/web/index.php?r=page/car-page 
    	*/
    	return $this->render('car-page');
    } 
}

?>