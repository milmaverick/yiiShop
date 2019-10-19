<?php
namespace app\models;

use Yii;

class Cart
{

    public function addToCart($good)
    {
      // code...
      if (isset($_SESSION['cart'][$good->id])) {

        // code...
        $_SESSION['cart'][$good->id]['goodQuantity'] +=1;
      }else {
        // code...
        $_SESSION['cart'][$good->id]=[
          'goodQuantity' => 1,
          'name'=> $good['name'],
          'price'=> $good['price'],
          'img'=> $good['img'],
        ];
      }

    }
}
