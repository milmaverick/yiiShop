function openCart(event) {
  event.preventDefault();
  $.ajax({
      url : '/cart/open' ,
      type : 'GET' ,
      success: function (res) {
        //alert('Успех');
        $('#modal .modal-body').html(res);
        $('#modal ').modal('show');
      },
      error: function (res) {
        alert(res);
        console.log(res);
      },
  });
}

$('.product-button_add').on('click',function (event) {
  event.preventDefault();
  var id = $(this).data('id');
  $.ajax({
      url : '/cart/add' ,
      type : 'GET' ,
      data : {
            id : id,
        },
      success: function (res) {
        //alert('Успех');
        $('#modal .modal-body').html(res);
      },
      error: function (res) {
        alert(res);
        console.log(res);
      },
  });
})
