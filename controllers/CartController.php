<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Good;
use app\models\Cart;
use app\models\Order;
use app\models\OrderGood;
/**
 *
 */
class CartController extends Controller
{
    public function actionOrder()
    {
      // code...
      $session =Yii::$app->session;
      $session->open();
      $order = new Order();

      if($order->load(Yii::$app->request->post()) )
      {
        if( $order->validate())
        $order->date =date('Y-m-d h:i:s');
        $order->sum= $session['cart.totalSum'];
        if($order->save()){
          Yii::$app->mailer->compose()
                  ->setFrom(['aaa@aaa.ru'=>'test test'])
                  ->setTo('bbb@bb.ru')
                  ->setSubject('order accepted')
                  ->send();
          $session->remove('cart');
          $session->remove('cart.totalSum');
          $session->remove('cart.totalQuantity');
          return $this->render('success');
        }

      }
      $this->layout = 'empty-layout';
      return $this->render('order', [
          'model' => $order,
      ]);
    }

    public function actionDelete($id)
    {
      // code...
      $session =Yii::$app->session;
      $session->open();
      $cart = new Cart();
      $cart->recalcCart($id);
      return $this->renderPartial('cart', compact('session'));
    }

    public function actionClear()
    {
      // code...
      $session =Yii::$app->session;
      $session->open();
      $session->remove('cart');
      $session->remove('cart.totalSum');
      $session->remove('cart.totalQuantity');
      return $this->renderPartial('cart', compact('session'));
    }
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
