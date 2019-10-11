<?php

namespace app\models;
use yii\db\ActiveRecord;

class Good extends ActiveRecord
{
  public function getAllGoods()
  {
    // code...
    $goods= Good::find()->all();
    return $goods;
  }

  public function getOneGood($id)
  {
    // code...
    $good= Good::findOne($id);
    return $good;
  }

  public function getGoodsCategories($id)
  {
    // code...
    $catGoods = Good::find()->where(['category'=>$id])->asArray()->all();
    return $catGoods;
  }
  public function getSearchResult($search)
  {
    // code...
    $searchResult= Good::find()->where(['like', 'name', $search])->asArray()->all();
    return $searchResult;
  }

}


?>
