<?php
  use yii\helpers\Url;

 ?>



  <nav class = "nav nav-menu">
      <a class="nav-link active" href="/">Все меню</a>
      <? foreach ($data as $id ) { ?>
        <a class="nav-link " href="<?=Url::to(['category/view', 'id' => $id['cat_name']])?>"><?=$id['browser_name']?></a>
    <? }?>
  </nav>
