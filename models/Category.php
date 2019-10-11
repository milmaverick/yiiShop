<?php
namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
  public function getCategories()
  {
    // code...
    return Category::find()->asArray()->all();
  }

}

 ?>
