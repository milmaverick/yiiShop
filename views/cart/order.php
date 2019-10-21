<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h2>Оформление заказа</h2>
<? $form = ActiveForm::begin([]) ?>

    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'phone') ?>
    <?= $form->field($model, 'address') ?>
    <?= $form->field($model, 'name') ?>
    <button class="btn btn-success">Оформить заказ</button>
<? ActiveForm::end() ?>
