<?
use yii\helpers\Html;
?>

<div class="descrGood">
  <div class="product">
    <div class=" product-img">
      <?= Html::img('@web/img/'.$good['img'], ['alt' => $good['name']]) ?>
    </div>
    <div class=" product-name">
        <?=$good['composition']?>
    </div>
    <div class=" product-descr">
        <?=$good['name']?>
    </div>
    <div class=" product-price">
        <?=$good['price']?>
    </div>
    <div class=" product-button">
        <a class="btn btn-md btn-success" href="#">заказать</a>
    </div>
  </div>

</div>

<!--div class="descrGood">
  <div class="product product-img">
    <img src="" alt="<?=$good['name']?>">
  </div>
  <div class="product product-name">
      <?=$good['composition']?>
  </div>
  <div class="product product-descr">
      <?=$good['name']?>
  </div>
  <div class="product product-price">
      <?=$good['price']?>
  </div>
  <div class="product product-button">
      <a class="btn btn-md btn-success" href="#">заказать</a>
  </div>
</div-->
