<?php
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
          <td style="vertical-align: middle" width=""><img class="product-img" src="/img/<?=$item['img']?>" alt="img"></td>
          <td style="vertical-align: middle"><?=$item['name']?></td>
          <td style="vertical-align: middle"><?=$item['goodQuantity']?></td>
          <td style="vertical-align: middle"><?=$item['price']?> </td>
          <td class="delete" data-id ="<?=$id ?>" style="text-align: center; cursor: pointer; vertical-align: middle; color: red">
              <span>✖</span></td>
      </tr>
      <!-- <tr>
        <td><img class="product-img" src="/img/<?=$item['img']?>"></td>
        <td><?=$item['name']?> </td>
        <td><?=$item['goodQuantity']?> </td>
        <td><?=$item['price']?> </td>
        <td></td>
      </tr> -->
    <?php endforeach; ?>
    <tr style="border-top: 4px solid black">
        <td colspan="4">Всего товаров</td>
        <td class="total-quantity"><?=$_SESSION['cart.totalQuantity']?></td>
    </tr>
    <tr>
        <td colspan="4">На сумму </td>
        <td style="font-weight: 700"><?=$_SESSION['cart.totalSum']?></td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-danger" onclick="clearCart(event)">Очистить</button>
<button type="button" class="btn btn-success btn-next" onclick="">Оформить заказ</button>

<?}
else {
?>
<h2>Корзина пуста</h2>
<?php
}
?>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
