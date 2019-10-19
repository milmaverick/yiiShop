<?php
//  var_dump($session['cart']);
if($session['cart']){
 ?>
<table>
  <thead>
    <tr>
      <th scope="col">Изображение </th>
      <th scope="col">Наименование </th>
      <th scope="col">Количество </th>
      <th scope="col">Цена </th>
      <th scope="col">Удалить </th>
    </tr>

  </thead>
  <tbody>
    <?php foreach ($session['cart'] as $id => $item): ?>
      <tr>
        <td><img class="product-img" src="/img/<?=$item['img']?>"></td>
        <td><?=$item['name']?> </td>
        <td><?=$item['goodQuantity']?> </td>
        <td><?=$item['price']?> </td>
        <td></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>
<?}
else {
?>
<h2>Корзина пуста</h2>
<?php
}
?>
