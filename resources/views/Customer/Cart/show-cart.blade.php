@extends('Customer.master')
@section('header')
<link rel="stylesheet" href="{{url('public/Customer')}}/css/style.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<style>
  .slide-advertise-inner {
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 21.25%;
  }
  #slide-advertise.owl-carousel .owl-item.active {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn;
    -webkit-animation-duration: .6s;
    animation-duration: .6s;
  }
</style>
<link rel="stylesheet" href="{{url('public/Customer')}}/css/cart.css">
</head>
@section('main')
<div class="container">
  <!-- Site Content -->
  <div class="site-content">

    <section class="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
        </ol>
      </nav>
    </section>

    <div class="site-cart">
      <section class="section-advertise">
        <div class="content-advertise">
          <div id="slide-advertise" class="owl-carousel">
            <div class="slide-advertise-inner" style="background-image: url('{{url('public/Customer')}}/storage/images/advertises/slide2.jpg');" data-dot="<button>VIVO Y91C giá siêu sốc</button>"></div>
            <div class="slide-advertise-inner" style="background-image: url('{{url('public/Customer')}}/storage/images/advertises/slide1.jpg');" data-dot="<button>Sắm NOKIA quà bao la</button>"></div>
          </div>
        </div>
      </section>

      <section class="section-cart">
        <div class="section-header">
          <h2 class="section-title">Giỏ Hàng 
            @if(Session::has("cart") != null)
            <span>( {{$cart->total_quantity}}Sản Phẩm )</span>
            @else
            <span>0</span>
            @endif
          </h2>
        </div>
        @if($cart->total_quantity ==0)
        <div class="section-content">
         <div class="row">
          <div class="col-md-8">

          </div>
          <div class="col-md-4 col-md-offset-4">
            <div class="cart-empty">
              <img src="{{url('public/Customer')}}/images/empty-cart.png" alt="Giỏ Hàng Trống">
              <div class="btn-cart-empty">
                <a href="{{route('index')}}" title="Tiếp tục mua sắm">Tiếp Tục Mua Sắm</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="section-content">
        <div class="row">
          <div class="col-md-8">

           
              <div class="cart-items">
                @foreach($cart->items as $item)
                
                <div class="item product-65">
                  <div class="image-product">
                    <a href="" target="_blank" title="Bàn phím NEO KM101 - ĐEN">
                      <img src="{{$item['image']}}">
                    </a>
                  </div>
                  <div class="info-product">
                    <div class="name"><a href="" target="_blank" title="Bàn phím NEO KM101 - ĐEN">{{$item['name']}}</a></div>
                    <div class="price"><strong>{{number_format($item['price'],'0','','.')}}</strong></div>
                    <div class="quantity-block">
                      <div class="input-group-btn">
                        <button onclick="minusInput()" >–</button>
                        <input type="text" onchange="if(this.value == 0) this.value=1;" maxlength="12" min="1" max="7" disabled id="qtyItem" name="quantity" size="1" value="{{$item['quantity']}}" data-url=""> 
                        <button onclick="plusInput()">+</button>
                      </div>
                    </div>
                    
                    <div class="remove-item">
                      
                      <a href="{{route('delete-cart',['id'=>$item['id']])}}" class="btn btn-link btn-item-delete remove-item-cart" data-id="65" title="Xóa" data-url="65" data-url=""><i class="fas fa-times"></i></a>
<!-- 
                      <a href="javascript:;" onclick="removeItem($(this));" class="btn btn-link btn-item-delete remove-item-cart" data-id="9" data-url="{{route('delete-cart',9)}}" title="Xóa" data-url=""><i class="fas fa-times"></i></a> -->

                    <!--  <a  class="remove-item-cart" data-id="{{$item['id']}}" title="Xóa" data-url=""><i class="fas fa-times"></i></a>

 -->

                    </div>

                    


                  </div>
                </div>      
                @endforeach
              </div>
            </div>
            <div class="col-md-4">
              <div class="total-price">
                <div class="box-price-top">
                  <div class="title">Số lượng</div>
                  <div class="price">{{$cart->total_quantity}}</div>
                </div>
                <div class="box-price-up">
                  <div class="title">Thành Tiền</div>
                  <div class="price">{{number_format($cart->total_price,0,'','.')}}</div>
                </div>
                <div class="btn-action">
                  <button title="Thanh Toán Ngay" data-url="">Thanh Toán Ngay</button>
                  <a href="{{route('index')}}" class="btn-btn-default" title="Tiếp Tục Mua Hàng">Tiếp Tục Mua Hàng</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
      </section>
    </div>
  </div>
</div>
@stop
@section('js')

<script>
  function plusInput()
  {
    var value = parseInt(document.getElementById('qtyItem').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
      value++;
      document.getElementById('qtyItem').value = value;
    }
  }
  function minusInput()
  {
    var value = parseInt(document.getElementById('qtyItem').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
      value--;
      document.getElementById('qtyItem').value = value;
    }
  }

</script>
<!-- <script type="text/javascript">
    $ ("#remove-item").on("click",".remove-item-cart i", function(){
      console.log($(this).data("id"));
    $.ajax({
      url: 'delete-cart'+$(this).data("id");
      type: 'GET',
    }).done(function(response){
      $("#reomove-item").empty();
      $("#reomove-item").html(response);
      alertify.success('xoa thanh cong');
    });
    console.log($(this).data("id"));

  });
</script> -->

<script src="{{url('')}}/public/Customer/js/cart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>