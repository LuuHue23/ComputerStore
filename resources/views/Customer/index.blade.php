@extends('Customer.master')
@section('main')
<div class="container">
  <!-- Site Content -->
  <div class="site-content">
    <div class="site-home">
      <section class="section-advertise">
        <div class="row">
          <div class="col-md-8">

            <div class="content-advertise">
              <div id="slide-advertise" class="owl-carousel">
                <div class="slide-advertise-inner " style="background-image: url('{{url('public/Customer')}}/storage/images/advertises/banner1.jpg');" data-dot="<button>Mua iPhone X Không lo rơi vỡ</button>"></div>
                <div class="slide-advertise-inner" style="background-image: url('public/Customer/storage/images/advertises/banner2.jpg');" data-dot="<button>Phụ kiện iWalk Mua 1 được 2</button>"></div>

                <div class="slide-advertise-inner" style="background-image: url('public/Customer/storage/images/advertises/banner3.jpg');" data-dot="<button>Mua Mi 8 hoặc Mi 8 SE Giá rẻ, có trả góp</button>"></div>
                <div class="slide-advertise-inner " style="background-image: url('public/Customer/storage/images/advertises/1banner4.jpg');" data-dot="<button>Redmi Note 7 CTY Giảm thẳng 200K</button>"></div>
                <div class="slide-advertise-inner " style="background-image: url('public/Customer/storage/images/advertises/banner5.jpg');" data-dot="<button>Đặt trước Mi 9 CTY Giá rẻ hơn 1 triệu</button>"></div>
              </div>
              <div class="custom-dots-slide-advertises"></div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="new-posts">
              <div class="posts-header">
                <h3 class="posts-title">TIN CÔNG NGHỆ</h3>
              </div>
              <div class="posts-content">
                <div class="post-item">
                  <a href="post/5.html" title="OPPO trình làng điện thoại gập nhưng sẽ không sản xuất hàng loạt">
                    <div class="row">
                      <div class="col-md-4 col-sm-3 col-xs-3 col-xs-responsive">
                        <div class="post-item-image" style="background-image: url('public/Customer/storage/images/posts/1577094560_post1.jpg'); padding-top: 50%;"></div>
                      </div>
                      <div class="col-md-8 col-sm-9 col-xs-9 col-xs-responsive">
                        <div class="post-item-content">
                          <h4 class="post-content-title">OPPO trình làng điện thoại gập nhưng sẽ không sản xuất hàng loạt</h4>
                          <p class="post-content-date">09:49 AM 23/12/2019</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="post-item">
                  <a href="post/4.html" title="Với Qualcomm, 5G không chỉ dành cho điện thoại mà còn cả PC">
                    <div class="row">
                      <div class="col-md-4 col-sm-3 col-xs-3 col-xs-responsive">
                        <div class="post-item-image" style="background-image: url('public/Customer/storage/images/posts/1577094513_post2.jpg'); padding-top: 50%;"></div>
                      </div>
                      <div class="col-md-8 col-sm-9 col-xs-9 col-xs-responsive">
                        <div class="post-item-content">
                          <h4 class="post-content-title">Với Qualcomm, 5G không chỉ dành cho điện thoại mà còn cả PC</h4>
                          <p class="post-content-date">09:48 AM 23/12/2019</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="post-item">
                  <a href="post/3.html" title="Galalaxy S10 ra mắt tại Việt Nam: Giá tốt hơn dự kiến, chỉ từ 16 triệu">
                    <div class="row">
                      <div class="col-md-4 col-sm-3 col-xs-3 col-xs-responsive">
                        <div class="post-item-image" style="background-image: url('public/Customer/storage/images/posts/1577094465_post3.jpg'); padding-top: 50%;"></div>
                      </div>
                      <div class="col-md-8 col-sm-9 col-xs-9 col-xs-responsive">
                        <div class="post-item-content">
                          <h4 class="post-content-title">Galalaxy S10 ra mắt tại Việt Nam: Giá tốt hơn dự kiến, chỉ từ 16 triệu</h4>
                          <p class="post-content-date">09:47 AM 23/12/2019</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="post-item">
                  <a href="post/2.html" title="Xuất hiện hình ảnh render sắc nét của smartphone OPPO zoom quang 10x">
                    <div class="row">
                      <div class="col-md-4 col-sm-3 col-xs-3 col-xs-responsive">
                        <div class="post-item-image" style="background-image: url('public/Customer/storage/images/posts/1577094407_post4.jpg'); padding-top: 50%;"></div>
                      </div>
                      <div class="col-md-8 col-sm-9 col-xs-9 col-xs-responsive">
                        <div class="post-item-content">
                          <h4 class="post-content-title">Xuất hiện hình ảnh render sắc nét của smartphone OPPO zoom quang 10x</h4>
                          <p class="post-content-date">09:46 AM 23/12/2019</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-favorite-products">
        <div class="section-header">
          <h2 class="section-title">SẢN PHẨM ƯA THÍCH</h2>
        </div>
        <div class="section-content">
          <div id="slide-favorite" class="owl-carousel">


            @foreach($product as $row)
            <div class="item-product">
              <a href="{{route('pro_detail',['slug'=>$row->slug])}}" title="{{$row->name}}">
                <div class="image-product" style="background-image: url('{{$row->image}}');padding-top: 100%;">

                </div>
                <div class="content-product">
                  <h3 class="title">{{$row->name}}</h3>
                  <div class="start-vote">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                  </div>
                  <div class="price">
                     @if($row->sale_price >0)
                          <strong>{{number_format($row->sale_price,0,'','.')}} VNĐ</strong>
                          @else
                          <strong>{{number_format($row->price,0,'','0')}} VNĐ</strong>
                          @endif
                  </div>
                </div>
              </a>
            </div>
            @endforeach

          </div>
        </div>
      </section>
      <section class="section-products">
        <div class="section-header">
          <div class="section-header-left">
            <h2 class="section-title">Tên</h2>
          </div>

          <div class="section-header-right">
            <ul>
              @foreach($category as $row)
              <li><a href="{{route('pro_cate',['slug'=>$row->slug])}}" title="{{$row->name}}">{{$row->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="section-content">
          <div class="row">

            <!-- <div class="col-md-2 col-md-40">
              <div class="item-product">
                <a href="product/14.html" title="IPhone 11 Pro Max">
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1587557416_C5sYA7pn_iphone-11-pro-den-didongviet_1_2.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">IPhone 11 Pro Max</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>33.490.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6" style="display: flex;">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>OLED, 6.5&quot;, Super Retina XDR</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>12 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>3 camera 12 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Apple A13 Bionic 6 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Apple GPU 4 nhân</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>4GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>64GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>3969 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->
            @foreach($product as $row)
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="{{route('pro_detail',['slug'=>$row->slug])}}" title="{{$row->name}}">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('{{$row->image}}');padding-top: 100%;">

                      </div>
                      <div class="content-product">
                        <h3 class="title">{{$row->name}}</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                         @if($row->sale_price >0)
                         <strong>{{number_format($row->sale_price,0,'','.')}}</strong>
                         @else
                         <strong>{{number_format($row->price,0,'','0')}}</strong>
                         @endif
                       </div>
                     </div>
                   </div>
                   <div class="col-md-12 col-sm-12 col-xs-12 animate">
                    <div class="product-details">
                      <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>Dynamic AMOLED, 6.3&quot;, Full HD+</p>
                      <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>10 MP</p>
                      <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 12 MP &amp; Phụ 12 MP, 16 MP</p>
                      <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Exynos 9825 8 nhân</p>
                      <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Mali-G76 MP12</p>
                      <p><strong><i class="fas fa-hdd"></i> RAM: </strong>8GB</p>
                      <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>256GB</p>
                      <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>3500 mAh, có sạc nhanh</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
  </div>
</div>
</div>


@stop