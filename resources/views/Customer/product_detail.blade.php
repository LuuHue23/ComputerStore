@extends('Customer.master')
@section('header')
<link type="text/css" rel="stylesheet" href="{{url('public/Customer')}}/common/lightGallery/dist/css/lightgallery.css" />
<link type="text/css" rel="stylesheet" href="{{url('public/Customer')}}/common/lightslider/dist/css/lightslider.css" />
<link rel="stylesheet" href="{{url('public/Customer')}}/css/product.css">
@section('main')
<div class="container" >
  <!-- Site Content -->
  <div class="site-content" >

    <section class="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Trang Chủ</a></li>
          <li class="breadcrumb-item"><a href="../products.html">Sản Phẩm</a></li>
          <li class="breadcrumb-item"><a href="../producer/4.html">{{$pro_detail->category->name}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$pro_detail->name}}</li>
        </ol>
      </nav>
    </section>
    <div class="site-product" >
      <section class="section-advertise">
        <div class="content-advertise">
         <div id="slide-advertise" class="owl-carousel">
          <div class="slide-advertise-inner" style="background-image: url('{{url('')}}/public/Customer/storage/images/advertises/slide2.jpg');  " data-dot="<button>VIVO Y91C giá siêu sốc</button>"></div>

          <div class="slide-advertise-inner" style="background-image: url('{{url('public/Customer')}}/storage/images/advertises/slide1.jpg'); " data-dot="<button>Sắm NOKIA quà bao la</button>"></div>
        </div>
      </div>
    </section>

    <section class="section-product" >
      <div class="section-header">

        <h2 class="section-title" >{{$pro_detail->name}}</h2>
        <div class="section-sub-title">
          <div class="sku-code">Danh mục: <i>{{$pro_detail->category->name}}</i></div>
          <div class="start-vote" ><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <div class="rate-link" onclick="scrollToxx();">

            <span>Đánh giá sản phẩm</span></div>
          </div>

        </div>
        <div class="section-content" >
          <div class="section-infomation" >
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="image-product">
                      <div class="image-gallery-0">

                        <!-- <ul id="imageGallery-0"> -->
                          <li style="list-style: none"  data-src="{{$pro_detail->image}}">
                            <img src="{{$pro_detail->image}}" style=" width: 312px; height: 341px"  />
                          </li>

                          <!-- </ul> -->
                        </div>

                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <div class="price-product">

                        @if($pro_detail->sale_price>0)
                        <div class="sale-price">{{number_format($pro_detail->sale_price,0,'','.')}} <span>VNĐ</span></div>
                        <div class="origin-price"> <del>{{number_format($pro_detail->price,0,'','.')}}</del></div>
                        @else
                        <div class="sale-price">{{number_format($pro_detail->price,0,'','.')}} <span>VNĐ</span></div>
                        @endif

                        <div class="status">Tình trạng: 
                          @if($pro_detail->status==1)
                          <span style="color: #1a2;"> Còn hàng </span>
                          @else
                          <span style="color: #1a2;"> Hết hàng </span>
                          @endif
                        </div>
                      </div>

                      <div class="form-payment">
                        <form action="" method="GET" accept-charset="utf-8">
                          <!-- <input type="hidden" name="_token" >  -->
                        
                         <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <a href="{{route('show-cart')}}">
                              <button  class="btn btn-lg btn-gray"><i class="far fa-money-bill-alt"> </i> Mua ngay</button>
                            </a>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                            <div class="form-center">
                              <button type="button" onclick="minusInput();" class="btn-minus btn-cts">–</button>
                              <input type="text"  class="qty input-text" id="qty" name="quantity" size="4" value="1" min="0" max="100" disabled>
                              <button type="button" onclick="plusInput();" class="btn-plus btn-cts">+</button>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <a href="{{route('add-cart',['id'=>$pro_detail->id])}}">
                            <button type="button" data-role="addtocart" data-id="{{$pro_detail->id}}"  class="btn btn-lg btn-gray btn-cart btn_buy "  id="btn-submit" > <span class="txt-main"><i class="fa fa-cart-arrow-down padding-right-10"></i>Giỏ hàng</span></button></a>
                          </div>
<!-- 

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            
                           <a href="{{route('add-cart',['id'=>$pro_detail->id])}}">
                              <button type="submit"  class="btn btn-lg btn-gray btn-cart btn_buy " onclick="getInput()"  > <span class="txt-main"><i class="fa fa-cart-arrow-down padding-right-10"></i>Giỏ hàng</span>
                            </button>
                           </a>
                          </div>
                          -->

                        

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="online_support"> 
                  <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                  <img src="{{url('public/Customer')}}/images/support_online.jpg">
                  <h3 class="sub_title" >Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                  <div class="phone"> <a>1800 6750</a></div>
                  <div class="or">HOẶC</span></div>
                  <h3 class="title" >Chat hỗ trợ trực tuyến</h3>
                  <h3 class="sub_title" >Chúng tôi luôn trực tuyến 24/7.</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="section-description">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <div class="tab-description">
                  <div class="tab-header">
                    <ul class="nav nav-tabs nav-tab-custom">
                      <li class="active"><a data-toggle="tab" href="#description">Mô Tả</a></li>
                      <li><a data-toggle="tab" href="#vote">Nhận Xét Và Đánh Giá</a></li>
                    </ul>
                  </div>
                  <div class="tab-content">
                    <div id="description" class="tab-pane fade in active">
                      <div class="content-description">
                        mô tả
                      </div>
                      <div class="loadmore" style="display: none;"><a>Đọc thêm <i class="fas fa-angle-down"></i></a></div>
                      <div class="hidemore" style="display: none;"><a>Thu gọn <i class="fas fa-angle-up"></i></a></div>
                    </div>
                    <div id="vote" class="tab-pane fade">
                      <div class="content-vote">
                        <div class="show-rate">
                          <div class="show-rate-header" >
                            Đánh giá từ người dùng
                          </div>
                          <div class="show-rate-content">
                            <div class="total-rate" >
                              <div class="total-rate-left" >5</div>
                              <div class="total-rate-right" >
                                <div class="start" ><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <div class="total-user">0 <i class="fas fa-users"></i></div>
                              </div>
                            </div>
                            <p class="text-center"><strong>Chưa có lượt đánh giá nào từ người dùng. Hãy cho chúng tôi biết ý kiến của bạn.</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4">
                <div class="infomation-detail">
                  <div class="infomation-header" style="border-bottom: 2px solid #eae9ef;"> 
                    <h2 class="title">Thông Số Kỹ Thuật</h2>
                  </div>
                  <div class="infomation-content" style="margin-top: 20px">
                    <ul>
                      <li><label>Màn Hình:</label>LTPS LCD, 6.3&quot;, Full HD+</li>
                      <li><label>Camera Trước:</label>25 MP</li>
                      <li><label>Camera Sau:</label>Chính 16 MP &amp; Phụ 2 MP</li>
                      <li><label>Ram:</label>4 GB</li>
                      <li><label>Bộ Nhớ Trong:</label>64 GB</li>
                      <li><label>CPU:</label>MediaTek Helio P60 8 nhân</li>
                      <li><label>GPU:</label>Mali-G72 MP3</li>
                      <li><label>Dung Lượng Pin:</label>3500 mAh, có sạc nhanh</li>
                      <li><label>Hệ Điều Hành:</label>Android</li>
                    </ul>
                  </div>
                  <div class="more-infomation" >
               <!--  <button type="button" style="text-align: center" class="btn btn-primary" data-toggle="modal" data-target="#more-infomation">
                  Xem cấu hình chi tiết
                </button> -->
              </div>
            </div>
            <div class="suggest-product">
              <div class="suggest-header" >
                <h2 >Sản Phẩm Cùng Loại</h2>
              </div>
              <div class="suggest-content" >
                <a href="5.html" title="OPPO F11 128GB" >
                  <div class="product-content">
                    <div class="image"><img src="{{url('public/Customer')}}/storage/images/products/1577113344_Qha0jOsk_oppo-f11-pro-128gb.jpg" width="80px"></div>

                    <div class="content">
                      <h3 class="title" >OPPO F11 128GB</h3>
                      <div class="start-vote" >
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                      </div>
                      <div class="price">
                        <strong style="color: red">8.490.000₫</strong>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!-- Modal -->
</div>
</div>
  @stop
  @section('js')
  <!-- Footer -->
<script type="text/javascript">
  $('#btn_submit').on('click', function(){
    var quantity=$('#quantity').val();
    alert(quantity);
  })
</script>


  <script>
    function addCart(id){
    $.ajax({
      url: 'add-card'+id,
      type: 'GET',
    }).done(function(response){
      console.log(response);
      $("#form-payment").empty();
      $("#form-payment").html(response);
    });
  }

</script>
  <script src="{{url('public/Customer')}}/common/Rate/rater.js"></script>
  <script src="{{url('public/Customer')}}/common/lightGallery/dist/js/lightgallery.js"></script>
  <script src="{{url('public/Customer')}}/common/lightslider/dist/js/lightslider.js"></script>

  <script>
   $(document).ready(function() {

    $(".section-rating .rating-form form").submit( function(eventObj) {
      $("<input />").attr("type", "hidden")
      .attr("name", "rate")
      .attr("value", $(".rating-product").rate("getValue"))
      .appendTo(".section-rating .rating-form form");
      return true;
    });
  });
</script>
<script src="{{url('')}}/public/Customer/js/product.js"> </script>


</body>

</html>

@stop

