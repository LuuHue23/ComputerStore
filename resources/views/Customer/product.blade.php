@extends('Customer/master')
@section('header')
<style>
    .slide-advertise-inner {
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 21.25% !important;
    }
    #slide-advertise.owl-carousel .owl-item.active {
      -webkit-animation-name: zoomIn;
      animation-name: zoomIn;
      -webkit-animation-duration: .6s;
      animation-duration: .6s;
    }
  </style>
@section('main')

<div class="container">
  <!-- Site Content -->
  <div class="site-content">
    
    <section class="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
        </ol>
      </nav>
    </section>

    <div class="site-products">
      <section class="section-advertise">
        <div class="content-advertise">
          <div id="slide-advertise" class="owl-carousel">
            <div class="slide-advertise-inner" style="background-image: url('storage/images/advertises/1577093953_cate_2.jpg');" data-dot="<button>VIVO Y91C giá siêu sốc</button>"></div>
            <div class="slide-advertise-inner" style="background-image: url('storage/images/advertises/1577093911_cate_3.jpg');" data-dot="<button>Sắm NOKIA quà bao la</button>"></div>
          </div>
        </div>
      </section>

      <section class="section-filter">
        <div class="section-header">
          <h2 class="section-title">Tìm Kiếm Và Sắp Xếp</h2>
        </div>
        <div class="section-content">
         <!--  <form action="{{route('pro_search')}}" method="GET" accept-charset="utf-8">
            @csrf -->
            <div class="row">
              <div class="col-md-10">
                <div class="row">
                 
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <form action="{{route('pro_search')}}" method="PUT">
                      @csrf
                    <input type="text" name="search" placeholder="Tìm kiếm..." value="">

                     </form>
                  </div>
              
                  <form action="" method="GET">
                    @csrf
                  <div class="col-md-3 col-sm-6 col-xs-6">

                    <select name='os'>
                      <option value='' selected>
                        Hệ Điều Hành
                      </option>
                      <option value='ios' >IOS</option>
                      <option value='android' >
                        Android
                      </option>
                      <option value='windows' >
                        Windows Phone
                      </option>
                    </select>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <select name='price'>
                      <option value='' selected>
                        Giá Sản Phẩm
                      </option>
                      <option value='asc' >
                        Giá từ thấp tới cao
                      </option>
                      <option value='desc' >
                        Giá từ cao tới thấp
                      </option>
                    </select>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">
                    <select name='type'>
                      <option value='' selected>
                        Loại Sản Phẩm
                      </option>
                      <option value='promotion' >
                        Sản phẩm khuyến mại
                      </option>
                      <option value='vote' >
                        Sản phẩm đánh giá cao
                      </option>
                    </select>
                  </div>
                </form>
                </div>
              </div>

              <div class="col-md-2">
                <button type="submit" class="btn btn-default">Lọc Sản Phẩm</button>
              </div>
            </div>
          </form>
        </div>
      </section>

      <section class="section-products">
        
        <div class="section-header">
            
          <div class="section-header-left">
            <h2 class="section-title">
              Tên
            </h2>
          </div>
          <div class="section-header-right">
            <ul>
              @foreach($cate as $value)
              <li><a href="{{route('pro_cate',['slug'=>$value->slug])}}" title="Apple">{{$value->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            
           
          @foreach($product as $row)
            <div class="col-md-2 col-md-20">
              <div class="item-product">
                <a href="{{route('pro_detail',['slug'=>$row->slug])}}" title="{{$row->category->name}}">
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
        <div class="section-footer text-center">
          
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