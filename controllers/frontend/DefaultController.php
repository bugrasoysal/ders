<?php

namespace kouosl\ders\controllers\frontend;
use kouosl\ders\models\DerssSearch;
use kouosl\ders\models\Ders;
use kouosl\ders\controllers\backend\DerssControllerController;
use yii;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
	
  
		
	
}
