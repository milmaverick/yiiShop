<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>
<div class="body-content">
  <h2> Результаты поиска по запросу "<?=$search?>" : </h2>
		<div class="row">
			<? if($goods) {
      foreach ($goods as $good) { ?>
				<div class="col-lg-4 ">
					<div class="previewGood">
            <div class="product">
              <div class="product-img">
  							<?= Html::img('@web/img/'.$good['img'], ['alt' => $good['name']]) ?>
  						</div>
  						<div class="product-composition">
  								<?=$good['composition']?>
  						</div>
  						<div class="product-descr">
  								<?=$good['name']?>
  						</div>
  						<div class="product-price">
  								<?=$good['price']?>$
  						</div>
  						<div class="product-button">
  							  <p><a class="btn btn-md btn-success" href="#">заказать</a></p>
  							 <p><a class="btn btn-md btn-primary" href="<?=Url::to(['category/more/','id'=>$good['id']])?>">подробнее</a></p>
  						</div>
            </div>

					</div>
				</div>
			<? }}
      else{ ?>
        <h4>Ничего не найдено :c </h4>
    <?  }
      ?>
	</div>
</div>
