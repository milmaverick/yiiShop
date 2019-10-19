<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Good;
/**
 *
 */
class CategoryController extends Controller
{

  public function actionIndex()
  {
    // code...
    $goods = new Good();
    $goods = $goods->getAllGoods();
    return $this->render('index', compact('goods'));
  }

  // public function actionMore($id)
  // {
  //   // code...
  //   $good = new Good();
  //   $good= $good->getOneGood($id);
  //   return $this->render('more',compact('good'));
  // }

  public function actionView($id)
  {
    // code...
    $goods = new Good();
    $goods = $goods->getGoodsCategories($id);
    return $this->render ('view',compact('goods'));
  }

  public function actionSearch()
  {
    // code...
    $search =  Yii::$app->request->get('search');
    $goods = new Good();
    $goods = $goods->getSearchResult($search);

    return $this->render('search', compact('goods','search'));
  }


}



 ?>
