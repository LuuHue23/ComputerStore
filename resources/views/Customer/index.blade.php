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
                <div class="slide-advertise-inner " style="background-image: url(public/Customer/storage/images/advertises/1577093857_slider_1.jpg);" data-dot="<button>Mua iPhone X Không lo rơi vỡ</button>"></div>
                <div class="slide-advertise-inner" style="background-image: url('public/Customer/storage/images/advertises/1577093814_slider_2.jpg');" data-dot="<button>Phụ kiện iWalk Mua 1 được 2</button>"></div>

                <div class="slide-advertise-inner" style="background-image: url('public/Customer/storage/images/advertises/1577093789_slider_3.jpg');" data-dot="<button>Mua Mi 8 hoặc Mi 8 SE Giá rẻ, có trả góp</button>"></div>
                <div class="slide-advertise-inner " style="background-image: url('public/Customer/storage/images/advertises/1577093741_slider_4.jpg');" data-dot="<button>Redmi Note 7 CTY Giảm thẳng 200K</button>"></div>
                <div class="slide-advertise-inner " style="background-image: url('public/Customer/storage/images/advertises/1577093717_slider_5.jpg');" data-dot="<button>Đặt trước Mi 9 CTY Giá rẻ hơn 1 triệu</button>"></div>
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
              <a href="{{route('pro_detail')}}" title="{{$row->name}}">
                <div class="image-product" style="background-image: url('{{$row->image}}');padding-top: 100%;">
                  
                </div>
                <div class="content-product">
                  <h3 class="title">{{$row->name}}</h3>
                  <div class="start-vote">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                  </div>
                  <div class="price">
                    <strong>{{$row->price}}VND</strong>
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
            <h2 class="section-title">ĐIỆN THOẠI</h2>
          </div>

          <div class="section-header-right">
            <ul>
              @foreach($category as $row)
              <li><a href="producer/1.html" title="Apple">{{$row->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-2 col-md-40">
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
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/13.html" title="Samsung Galaxy Note 10">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577117658_BkLuXOv8_samsung-galaxy-note-10-(6.html).jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">Samsung Galaxy Note 10</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>22.490.000₫</strong>
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
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/12.html" title="IPhone 11 Pro 128GB">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577117100_afIgGGKs_iphone-11-pro.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">IPhone 11 Pro 128GB</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>31.990.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>OLED, 5.8&quot;, Super Retina XDR</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>12 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>3 camera 12 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Apple A13 Bionic 6 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Apple GPU 4 nhân</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>4GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>128GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>3046 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/11.html" title="Samsung Galaxy S10 Plus">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577116672_J3Q4MhxM_SamSungGalaxyS10.png');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">Samsung Galaxy S10 Plus</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>22.990.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>Dynamic AMOLED, 6.4&quot;, Quad HD+ (2K+)</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>Chính 10 MP &amp; Phụ 8 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 12 MP &amp; Phụ 12 MP, 16 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Exynos 9820 8 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Mali-G76 MP12</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>8GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>128GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>4100 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/10.html" title="IPhone 11 64GB">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577116181_gaGwh0e6_iphone-11.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">IPhone 11 64GB</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>21.990.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>IPS LCD, 6.1&quot;, Liquid Retina</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>12 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 12 MP &amp; Phụ 12 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Apple A13 Bionic 6 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Apple GPU 4 nhân</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>4GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>64GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>3110 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/9.html" title="Samsung Galaxy S10e">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577115826_cWYgOmmj_ss-galaxy-s10e-den-1.png');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">Samsung Galaxy S10e</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>16.490.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>Dynamic AMOLED, 5.8&quot;, Full HD+</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>10 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>12 MP và 16 MP (2 camera)</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Exynos 9820 8 nhân 64-bit</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Mali-G76 MP12</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>6GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>128GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>3100 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/8.html" title="IPhone 8 Plus">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577114645_yn58HuVl_iphone-8-plus-thumb.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">IPhone 8 Plus</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>15.990.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>LED-backlit IPS LCD, 5.5&quot;, Retina HD</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>7 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 12 MP &amp; Phụ 12 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Apple A11 Bionic 6 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Apple GPU 3 nhân</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>3GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>64GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>2691 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/7.html" title="Samsung Galaxy Note 9">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577114295_g226AHaQ_samsung-galaxy-note-9.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">Samsung Galaxy Note 9</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>22.990.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>Super AMOLED, 6.4&quot;, Quad HD+ (2K+)</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>8 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 12 MP &amp; Phụ 12 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Exynos 9810 8 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Mali-G72 MP18</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>6GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>128GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>4000 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="product/6.html" title="Samsung Galaxy A7">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="image-product" style="background-image: url('public/Customer/storage/images/products/1577113865_lzNtvCX9_samsung-galaxy-a70.jpg');padding-top: 100%;">
                        
                      </div>
                      <div class="content-product">
                        <h3 class="title">Samsung Galaxy A7</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>9.290.000₫</strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 animate">
                      <div class="product-details">
                        <p><strong><i class="fas fa-tv"></i> Màn Hình: </strong>Super AMOLED, 6.7&quot;, Full HD+</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera Trước: </strong>32 MP</p>
                        <p><strong><i class="fas fa-camera-retro"></i> Camera sau: </strong>Chính 32 MP &amp; Phụ 8 MP, 5 MP</p>
                        <p><strong><i class="fas fa-microchip"></i> CPU: </strong>Snapdragon 675 8 nhân</p>
                        <p><strong><i class="fas fa-microchip"></i>GPU: </strong>Adreno 612</p>
                        <p><strong><i class="fas fa-hdd"></i> RAM: </strong>6GB</p>
                        <p><strong><i class="fas fa-hdd"></i> Bộ Nhớ Trong: </strong>128GB</p>
                        <p><strong><i class="fas fa-battery-full"></i> Dung Lượng PIN: </strong>4500 mAh, có sạc nhanh</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

<!-- MiniCart display -->
<div class="support-cart mini-cart">
  <a class="btn-support-cart" href="cart.html">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 435.104 435.104" style="enable-background:new 0 0 435.104 435.104;" xml:space="preserve" width="30px" height="30px">
      <g>
        <circle cx="154.112" cy="377.684" r="52.736" data-original="#000000" class="active-path" data-old_color="#Ffffff" fill="#FFFFFF"></circle>
        <path d="M323.072,324.436L323.072,324.436c-29.267-2.88-55.327,18.51-58.207,47.777c-2.88,29.267,18.51,55.327,47.777,58.207     c3.468,0.341,6.962,0.341,10.43,0c29.267-2.88,50.657-28.94,47.777-58.207C368.361,346.928,348.356,326.924,323.072,324.436z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"></path>
        <path d="M431.616,123.732c-2.62-3.923-7.059-6.239-11.776-6.144h-58.368v-1.024C361.476,54.637,311.278,4.432,249.351,4.428     C187.425,4.424,137.22,54.622,137.216,116.549c0,0.005,0,0.01,0,0.015v1.024h-43.52L78.848,50.004     C77.199,43.129,71.07,38.268,64,38.228H0v30.72h51.712l47.616,218.624c1.257,7.188,7.552,12.397,14.848,12.288h267.776     c7.07-0.041,13.198-4.901,14.848-11.776l37.888-151.552C435.799,132.019,434.654,127.248,431.616,123.732z M249.344,197.972     c-44.96,0-81.408-36.448-81.408-81.408s36.448-81.408,81.408-81.408s81.408,36.448,81.408,81.408     C330.473,161.408,294.188,197.692,249.344,197.972z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"></path>
        <path d="M237.056,118.1l-28.16-28.672l-22.016,21.504l38.912,39.424c2.836,2.894,6.7,4.55,10.752,4.608     c3.999,0.196,7.897-1.289,10.752-4.096l64.512-60.928l-20.992-22.528L237.056,118.1z" data-original="#000000" class="active-path" data-old_color="#F8F8F8" fill="#FFFFFF"></path>
      </g>
    </svg>
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <span class="cnt crl-bg count_item_pr">0</span>
  </a>
  <div class="top-cart-content">
    <ul id="cart-sidebar" class="mini-products-list count_li">
      <div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>
    </ul>
  </div>
</div>
<div id="menu-overlay"></div>
@stop