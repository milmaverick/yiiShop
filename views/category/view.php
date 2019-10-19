<?php
use yii\helpers\Url;
use yii\helpers\Html;
 ?>

<?=app\widgets\MenuWidget::widget()?>

<div class="body-content">
		<div class="row">
			<?foreach ($goods as $good) { ?>
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
  							 <p><a class="btn btn-md btn-primary" href="<?=Url::to(['good/index/','id'=>$good['id']])?>">подробнее</a></p>
  						</div>
            </div>

					</div>
				</div>
			<? }?>
	</div>
</div>
