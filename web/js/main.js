$('.modal-content').on('click', '.btn-next', function (e) {

    $.ajax
    ({
        url : '/cart/order' ,
        type : 'GET' ,
        success: function (res) {
          //alert('Успех');
          $('#order .modal-content').html(res);
          $('#modal').modal('hide');
          $('#order').modal('show');
        },
        error: function (res) {
          alert(res);
          console.log(res);
        },
    });
});

function openCart(event) {
    event.preventDefault();
    $.ajax
    ({
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

$('.modal-body').on('click', '.delete', function (e) {
    var id = $(this).data('id');
    e.preventDefault();
    $.ajax
    ({
        url : '/cart/delete' ,
        type : 'GET' ,
        data: {
          id: id
        },
        success: function (res) {
          //alert('Успех');
          $('#modal .modal-body').html(res);
          if( $('.total-quantity').html()) $('.menu-quantity').html('('+$('.total-quantity').html()+')');

          else $('.menu-quantity').html('(0)');
        },
        error: function (res) {
          alert(res);
          console.log(res);
        }
    });
  });

function clearCart(e) {
  if(confirm('точно очитить корзину?')){
    e.preventDefault();
    $.ajax({
        url : '/cart/clear' ,
        type : 'GET' ,
        success: function (res) {
          //alert('Успех');
          $('#modal .modal-body').html(res);
          $('.menu-quantity').html('(0)');
        },
        error: function (res) {
          alert(res);
          console.log(res);
        },
    });
  }
}

$('.product-button_add').on('click',function (event) {
  event.preventDefault();
  var id = $(this).data('id');
  console.log($('.total-quantity').val());
  $.ajax({
      url : '/cart/add' ,
      type : 'GET' ,
      data : {
            id : id,
        },
      success: function (res) {
        //alert('Успех');
        $('#modal .modal-body').html(res);
        if( $('.total-quantity').html()) $('.menu-quantity').html('('+$('.total-quantity').html()+')');
        else $('.menu-quantity').html('(0)');
      },
      error: function (res) {
        alert(res);
        console.log(res);
      },
  });
})
