<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Good;
use app\models\Cart;

/**
 *
 */
class CartController extends Controller
{
    public function actionOpen()
    {
      // code...
      $session =Yii::$app->session;
      $session->open();
      return $this->renderPartial('cart', compact('session'));
    }
    public function actionAdd($id)
    {
      $good = new Good();
      $good = $good->getOneGood($id);
      $session =Yii::$app->session;
      $session->open();
      $cart = new Cart();
      $cart->addToCart($good);
      return $this->renderPartial('cart', compact('good','session'));
    }
}
