<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Good;
/**
 *
 */
class GoodController extends Controller
{

  public function actionIndex($id)
  {
    // code...
    $good = new Good();
    $good= $good->getOneGood($id);
    return $this->render('index',compact('good'));
  }

}



 ?>
