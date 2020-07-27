@extends('Customer.master')
@section('main')

<div class="container">
  <!-- Site Content -->
  <div class="site-content">

    <section class="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Trang Chủ</a></li>
          <li class="breadcrumb-item"><a href="../products.html">Sản Phẩm</a></li>
          <li class="breadcrumb-item"><a href="../producer/4.html">OPPO</a></li>
          <li class="breadcrumb-item active" aria-current="page">OPPO F9 64GB</li>
        </ol>
      </nav>
    </section>

    <div class="site-product">
      <section class="section-advertise">
        <div class="content-advertise">
          <div id="slide-advertise" class="owl-carousel">
            <div class="slide-advertise-inner" style="background-image: url('{{url('public/Customer')}}/storage/images/advertises/1577093953_cate_2.jpg');" data-dot="<button>VIVO Y91C giá siêu sốc</button>"></div>
            <div class="slide-advertise-inner" style="background-image: url('public/Customer/storage/images/advertises/1577093911_cate_3.jpg');" data-dot="<button>Sắm NOKIA quà bao la</button>"></div>
          </div>
        </div>
      </section>

      <section class="section-product">
        <div class="section-header">
          <h2 class="section-title">OPPO F9 64GB</h2>
          <div class="section-sub-title">
            <div class="sku-code">Mã sản phẩm: <i>OPF92019</i></div>
            <div class="start-vote"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <div class="rate-link" onclick="scrollToxx();">



              <span>Đánh giá sản phẩm</span></div>
            </div>
          </div>
          <div class="section-content">
            <div class="section-infomation">
              <div class="row">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="image-product">
                        <div class="image-gallery-0">

                          <ul id="imageGallery-0">
                            <li style="list-style: none" data-thumb="https://phonestorewebsite.000webhostapp.com/storage/images/products/1577112521_lcX3VeoG_oppof9-do-1.jpg" data-src="{{url('/')}}/uploads/HDD.jpg">
                              <img src="{{url('/')}}/uploads/HDD.jpg" />
                            </li>

                          </ul>
                        </div>
                        <div class="image-gallery-1" style="display: none;">

                     <!--    <ul id="imageGallery-1">
                          <li data-thumb="https://phonestorewebsite.000webhostapp.com/storage/images/products/1577112522_tHNaVMBL_oppo-f9-tim.png" data-src="../storage/images/products/1577112522_tHNaVMBL_oppo-f9-tim.png">
                            <img src="../storage/images/products/1577112522_tHNaVMBL_oppo-f9-tim.png" />
                          </li>
                          <li data-thumb="https://phonestorewebsite.000webhostapp.com/storage/images/products/1577112522_5mClgkl6_oppo-f9-tim-1.png" data-src="../storage/images/products/1577112522_5mClgkl6_oppo-f9-tim-1.png">
                            <img src="../storage/images/products/1577112522_5mClgkl6_oppo-f9-tim-1.png" />
                          </li>
                          <li data-thumb="https://phonestorewebsite.000webhostapp.com/storage/images/products/1577112522_Ec5exEio_oppo-f9-tim-2.jpg" data-src="../storage/images/products/1577112522_Ec5exEio_oppo-f9-tim-2.jpg">
                            <img src="../storage/images/products/1577112522_Ec5exEio_oppo-f9-tim-2.jpg" />
                          </li>
                          <li data-thumb="https://phonestorewebsite.000webhostapp.com/storage/images/products/1577112522_a4nLN1lY_oppo-f9-tim-3.jpg" data-src="../storage/images/products/1577112522_a4nLN1lY_oppo-f9-tim-3.jpg">
                            <img src="../storage/images/products/1577112522_a4nLN1lY_oppo-f9-tim-3.jpg" />
                          </li>
                        </ul> -->
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6">
                    <div class="price-product">
                      <div class="product-0">
                        <div class="sale-price">6.990.000 <span>VNĐ</span></div>
                        <div class="status">Tình trạng: <span style="color: #1a2;">Còn hàng</span></div>
                      </div>
                      <div class="product-1" style="display: none;">
                        <div class="sale-price">6.990.000 <span>VNĐ</span></div>
                        <div class="status">Tình trạng: <span style="color: #1a2;">Còn hàng</span></div>
                      </div>
                    </div>
                    <!-- <div class="color-product">
                      <div class="title">Màu sắc:</div>
                      <div class="select-color">
                        <div class="row">
                          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="color-inner active" product-id="8" data-key="0" can-buy="1" data-qty="100">
                              <div class="select-inner">
                                <div class="image-color"><img src="../storage/images/products/1577112521_lcX3VeoG_oppof9-do-1.jpg"></div>
                                <div class="image-name">Đỏ</div>
                              </div>
                              <div class="image-check"><img src="../images/select-pro.png"></div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="color-inner " product-id="9" data-key="1" can-buy="1" data-qty="100">
                              <div class="select-inner">
                                <div class="image-color"><img src="../storage/images/products/1577112522_tHNaVMBL_oppo-f9-tim.png"></div>
                                <div class="image-name">Tím</div>
                              </div>
                              <div class="image-check"><img src="../images/select-pro.png"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="form-payment">
                      <form action="https://phonestorewebsite.000webhostapp.com/checkout" method="POST" accept-charset="utf-8">
                        <input type="hidden" name="_token" value="Lwy3kXvXtJ6UTTzBc0o5Re8YdQ0452rbdPlxnhWG">                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <button type="submit" class="btn btn-lg btn-gray"><i class="far fa-money-bill-alt"></i> Mua ngay</button>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="form-center">
                              <button type="button" onclick="minusInput();" class="btn-minus btn-cts">–</button>
                              <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" min="0" max="100" disabled>
                              <button type="button" onclick="plusInput();" class="btn-plus btn-cts">+</button>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <button type="button" data-role="addtocart" class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart" data-url="../cart/add.html"><span class="txt-main"><i class="fa fa-cart-arrow-down padding-right-10"></i> Giỏ hàng</span></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="online_support">
                  <h2 class="title" style=" width: 100%;
                  text-align: center;
                  font-size: 16px;
                  line-height: 23px;
                  margin: 0;
                  font-weight: 600;">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                  <img src="{{url('public/Customer')}}/images/support_online.jpg" style=" display: block;
                  margin: 10px auto;
                  object-fit: cover;
                  max-width: 100%;">
                  <h3 class="sub_title" style="  width: 100%;
                  text-align: center;
                  font-size: 14px;
                  line-height: 23px;
                  margin: 0;
                  font-weight: 400;
                  color: #7a7d8d;">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                  <div class="phone" style=" width: 100%;
                  margin-top: 10px;
                  display: block;
                  text-align: center;
                  line-height: 1.1;">
                  <a href="tel:18006750" title="1800 6750" style="font-size: 36px;
                  font-weight: 600;
                  color: #1fb349;
                  text-decoration: none;">1800 6750</a>
                </div>
                <div class="or" style="  width: 100%;
                margin: 10px 0;
                color: #7a7d8d;
                text-align: center;
                line-height: 1.1;"><span style="display: inline-block;
  background: #fff;
  padding: 0 10px;
  transform: translateY(50%);
  font-size: 13px;
  line-height: 16px;">HOẶC</span></div>
                <h3 class="title" style=" width: 100%;
                text-align: center;
                font-size: 16px;
                line-height: 23px;
                margin: 0;
                font-weight: 600;">Chat hỗ trợ trực tuyến</h3>
                <h3 class="sub_title" style=" width: 100%;
                text-align: center;
                font-size: 14px;
                line-height: 23px;
                margin: 0;
                font-weight: 400;
                color: #7a7d8d;">Chúng tôi luôn trực tuyến 24/7.</h3>
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
                        <div class="show-rate-header">
                          Đánh giá từ người dùng
                        </div>
                        <div class="show-rate-content">
                          <div class="total-rate">
                            <div class="total-rate-left">5</div>
                            <div class="total-rate-right">
                              <div class="start"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
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
                <div class="infomation-header">
                  <h2 class="title">Thông Số Kỹ Thuật</h2>
                </div>
                <div class="infomation-content">
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
                <div class="more-infomation">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#more-infomation">
                    Xem cấu hình chi tiết
                  </button>
                </div>
              </div>
              <div class="suggest-product">
                <div class="suggest-header">
                  <h2>Sản Phẩm Cùng Loại</h2>
                </div>
                <div class="suggest-content">
                  <a href="5.html" title="OPPO F11 128GB">
                    <div class="product-content">
                      <div class="image">
                        <img src="../storage/images/products/1577113344_Qha0jOsk_oppo-f11-pro-128gb.jpg">
                      </div>
                      <div class="content">
                        <h3 class="title">OPPO F11 128GB</h3>
                        <div class="start-vote">
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                          <strong>8.490.000₫</strong>
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
    </section>
  </div>
  <!-- Modal -->
  <div id="more-infomation" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
          <h4 class="modal-title">Thông Số Kĩ Thuật Chi Tiết</h4>
        </div>
        <div class="modal-body">
          <div class="content">
            <p><img id="imgKit" style="margin: 0px auto; padding: 0px; border: 0px; display: block; width: 500px; height: auto; color: #333333; font-family: Helvetica, Arial, 'DejaVu Sans', 'Liberation Sans', Freesans, sans-serif; font-size: 14px;" src="../../cdn.tgdd.vn/Products/Images/42/182153/Kit/oppo-f9-mo-ta-chuc-nang.jpg" alt="Thông số kỹ thuật 182153" width="500" height="430"></p>
            <ul class="parameterfull" style="margin: 0px; padding: 10px 30px; list-style: none; position: relative; overflow: hidden; background: #ffffff; width: 450px; color: #333333; font-family: Helvetica, Arial, 'DejaVu Sans', 'Liberation Sans', Freesans, sans-serif; font-size: 14px;">
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Màn hình</label></li>
              <li class="g6459" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Công nghệ màn hình</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-man-hinh-ltps-lcd-1172755" target="_blank" rel="noopener">LTPS LCD</a></div>
              </li>
              <li class="g78" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Độ phân giải</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#fullhd" target="_blank" rel="noopener">Full HD+ (1080 x 2340 Pixels)</a></div>
              </li>
              <li class="g79" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Màn hình rộng</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">6.3"</div>
              </li>
              <li class="g7799" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;">
                <div class="ph" style="margin: 0px; padding: 0px; display: table-cell; width: auto; vertical-align: top;">Mặt kính cảm ứng</div>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cac-mat-kinh-cuong-luc-gorilla-glass-1172198#glass6" target="_blank" rel="noopener">Kính cường lực Corning Gorilla Glass 6</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Camera sau</label></li>
              <li class="g27" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Độ phân giải</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">Chính 16 MP & Phụ 2 MP</div>
              </li>
              <li class="g31" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Quay phim</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#hd" target="_blank" rel="noopener">Quay phim HD 720p@24fps</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd" target="_blank" rel="noopener">Quay phim FullHD 1080p@30fps</a></div>
              </li>
              <li class="g6460" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Đèn Flash</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tim-hieu-cac-loai-den-flash-tren-camera-dien-thoai-1143808#denflash" target="_blank" rel="noopener">Có</a></div>
              </li>
              <li class="g28" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Chụp ảnh nâng cao</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/chup-anh-xoa-phong-la-gi-no-co-tac-dung-nhu-the-na-1138006" target="_blank" rel="noopener">Xoá phông</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/che-do-autofocus-trong-chup-anh-tren-smartphone-906408" target="_blank" rel="noopener">Tự động lấy nét (AF)</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/che-do-touch-focus-khi-chup-anh-tren-smartphone-906412" target="_blank" rel="noopener">Chạm lấy nét</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/chuc-nang-nhan-dien-khuon-mat-la-gi-907903" target="_blank" rel="noopener">Nhận diện khuôn mặt</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/che-do-chup-anh-hdr-tren-smartphone-la-gi-906400" target="_blank" rel="noopener">HDR</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/chup-anh-panorama-toan-canh-tren-camera-cua-smar-906425" target="_blank" rel="noopener">Toàn cảnh (Panorama)</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/che-do-lam-dep-beautify-tren-smartphone-tablet-1172231" target="_blank" rel="noopener">Làm đẹp (Beautify)</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Camera trước</label></li>
              <li class="g29" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Độ phân giải</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">25 MP</div>
              </li>
              <li class="g30" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Videocall</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/goi-video-call-la-gi-neu-may-khong-trang-bi-san-1174141" target="_blank" rel="noopener">Hỗ trợ VideoCall thông qua ứng dụng</a></div>
              </li>
              <li class="g7801" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Thông tin khác</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cong-nghe-selfie-ai-beauty-la-gi-1049958" target="_blank" rel="noopener">Làm đẹp (Selfie A.I Beauty)</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/ar-stickers-la-gi-vi-sao-hang-nao-cung-ap-dung-ar-1096228" target="_blank" rel="noopener">Nhãn dán (AR Stickers)</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/chuc-nang-nhan-dien-khuon-mat-la-gi-907903" target="_blank" rel="noopener">Nhận diện khuôn mặt</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-1174134#fullhd" target="_blank" rel="noopener">Quay video Full HD</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Hệ điều hành - CPU</label></li>
              <li class="g72" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Hệ điều hành</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/he-dieu-hanh-coloros-tren-oppo-la-ma-quen-1073718" target="_blank" rel="noopener">ColorOS 5.2 (Android 8.1)</a></div>
              </li>
              <li class="g6059" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Chipset (hãng SX CPU)</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/helio-p60-ra-mat-tai-mwc-2018-dem-den-nhung-tinh-n-1172128" target="_blank" rel="noopener">MediaTek Helio P60 8 nhân</a></div>
              </li>
              <li class="g51" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Tốc độ CPU</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">2.0 GHz</div>
              </li>
              <li class="g6079" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Chip đồ họa (GPU)</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/mediatek-gioi-thieu-helio-p60-tai-mwc-2018-tap-trung-ai-va-hieu-suat-1069899" target="_blank" rel="noopener">Mali-G72 MP3</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Bộ nhớ & Lưu trữ</label></li>
              <li class="g50" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">RAM</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">4 GB</div>
              </li>
              <li class="g49" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Bộ nhớ trong</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">64 GB</div>
              </li>
              <li class="g7803" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Bộ nhớ còn lại (khả dụng)</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">Khoảng 50 GB</div>
              </li>
              <li class="g52" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Thẻ nhớ ngoài</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/the-nho-dien-thoai" target="_blank" rel="noopener">MicroSD, hỗ trợ tối đa 256 GB</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Kết nối</label></li>
              <li class="g7761" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Mạng di động</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/mang-du-lieu-di-dong-4g-la-gi-731757" target="_blank" rel="noopener">Hỗ trợ 4G</a></div>
              </li>
              <li class="g6339" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">SIM</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/tim-hieu-cac-loai-sim-thong-dung-sim-thuong-micro--590216#nanosim" target="_blank" rel="noopener">2 Nano SIM</a></div>
              </li>
              <li class="g66" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Wifi</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/wifi-la-gi-cai-dat-wifi-hotspot-nhu-the-nao--590309#80211ac" target="_blank" rel="noopener">Wi-Fi 802.11 a/b/g/n/ac</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/cac-chuan-ket-noi-khong-day-giua-smartphone-voi-tv-590540#dlna" target="_blank" rel="noopener">DLNA</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/wi-fi-direct-la-gi--590298" target="_blank" rel="noopener">Wi-Fi Direct</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/wifi-la-gi-cai-dat-wifi-hotspot-nhu-the-nao--590309#wifihotspot" target="_blank" rel="noopener">Wi-Fi hotspot</a></div>
              </li>
              <li class="g68" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">GPS</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/gps-la-gi-806129#a-gps" target="_blank" rel="noopener">A-GPS</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/gps-la-gi-806129#glonass" target="_blank" rel="noopener">GLONASS</a></div>
              </li>
              <li class="g69" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Bluetooth</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-743602#le" target="_blank" rel="noopener">LE</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cong-nghe-bluetooth-a2dp-la-gi-723725" target="_blank" rel="noopener">A2DP</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/bluetooth-42-la-gi-895615" target="_blank" rel="noopener">v4.2</a></div>
              </li>
              <li class="g71" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Cổng kết nối/sạc</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/micro-usb-la-gi--590081" target="_blank" rel="noopener">Micro USB</a></div>
              </li>
              <li class="g48" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Jack tai nghe</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">3.5 mm</div>
              </li>
              <li class="g5199" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Kết nối khác</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/ket-noi-otg-la-gi-otg-duoc-su-dung-cho-muc-dich-gi-1172882" target="_blank" rel="noopener">OTG</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Thiết kế & Trọng lượng</label></li>
              <li class="g7804" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Thiết kế</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/tin-tuc/tim-hieu-cac-kieu-thiet-ke-tren-di-dong-va-may-tin-597153#nguyenkhoi" target="_blank" rel="noopener">Nguyên khối</a></div>
              </li>
              <li class="g7805" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Chất liệu</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">Khung & Mặt lưng nhựa</div>
              </li>
              <li class="g88" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Kích thước</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">Dài 156.7 mm - Ngang 74 mm - Dày 7.99 mm</div>
              </li>
              <li class="g100" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Trọng lượng</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">169 g</div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Thông tin pin & Sạc</label></li>
              <li class="g84" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Dung lượng pin</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">3500 mAh</div>
              </li>
              <li class="g83" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Loại pin</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/so-sanh-pin-li-ion-va-pin-li-po-651833#lipo" target="_blank" rel="noopener">Pin chuẩn Li-Po</a></div>
              </li>
              <li class="g10859" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;">
                <div class="ph" style="margin: 0px; padding: 0px; display: table-cell; width: auto; vertical-align: top;">Công nghệ pin</div>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/che-do-tiet-kiem-pin-va-sieu-tiet-kiem-pin-la-gi-926730" target="_blank" rel="noopener">Tiết kiệm pin</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="http://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-sac-nhanh-vooc-cua-oppo-918283" target="_blank" rel="noopener">Sạc nhanh VOOC</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Tiện ích</label></li>
              <li class="g10860" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Bảo mật nâng cao</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cam-bien-van-tay-tren-smartphone-la-gi-908163" target="_blank" rel="noopener">Mở khóa bằng vân tay</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tinh-nang-mo-khoa-bang-khuon-mat-la-gi-1167784" target="_blank" rel="noopener">Mở khoá khuôn mặt</a></div>
              </li>
              <li class="g43" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Tính năng đặc biệt</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tong-hop-mot-so-tinh-nang-quen-thuoc-tren-dien-t-1144487#chan" target="_blank" rel="noopener">Chặn tin nhắn</a><br style="margin: 0px; padding: 0px;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/lam-the-nao-de-ghi-am-cuoc-goi-tren-android-574902#ghiam" target="_blank" rel="noopener">Ghi âm cuộc gọi</a><br style="margin: 0px; padding: 0px;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/tong-hop-mot-so-tinh-nang-quen-thuoc-tren-dien-t-1144487#chan" target="_blank" rel="noopener">Chặn cuộc gọi</a><br style="margin: 0px; padding: 0px;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cong-nghe-sac-nhanh-tren-smartphone-755549" target="_blank" rel="noopener">Sạc pin nhanh</a><br style="margin: 0px; padding: 0px;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/man-hinh-cong-25d-chuan-muc-moi-cho-smartphone-837574" target="_blank" rel="noopener">Mặt kính 2.5D</a><br style="margin: 0px; padding: 0px;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/nhan-doi-ung-dung-la-gi-1115719" target="_blank" rel="noopener">Nhân bản ứng dụng</a></div>
              </li>
              <li class="g36" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Ghi âm</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/microphone-chong-on-la-gi-894183" target="_blank" rel="noopener">Có, microphone chuyên dụng chống ồn</a></div>
              </li>
              <li class="g34" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Radio</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">Có</div>
              </li>
              <li class="g32" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Xem phim</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#mp4" target="_blank" rel="noopener">MP4</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#h263" target="_blank" rel="noopener">H.263</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#h264" target="_blank" rel="noopener">H.264(MPEG4-AVC)</a></div>
              </li>
              <li class="g33" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Nghe nhạc</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;"><a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#mp3" target="_blank" rel="noopener">MP3</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#wav" target="_blank" rel="noopener">WAV</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#eaac+" target="_blank" rel="noopener">eAAC+</a>, <a style="margin: 0px; padding: 0px; text-decoration-line: none; color: #288ad6;" href="https://www.thegioididong.com/hoi-dap/cac-dinh-dang-video-va-am-thanh-740243#flac" target="_blank" rel="noopener">FLAC</a></div>
              </li>
              <li style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><label style="margin: 0px; padding: 8px; font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: 600; font-stretch: normal; font-size: 16px; line-height: 18px; color: #c0392b; outline: none; zoom: 1; display: block; background: #f2f2f2;">Thông tin khác</label></li>
              <li class="g13045" style="margin: 0px; padding: 0px; display: table; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 450px; border-bottom: 1px solid #dadada;"><span style="margin: 0px; padding: 6px 5px; display: table-cell; width: 147px; vertical-align: top; font-size: 13px; color: #666666; font-weight: 600;">Thời điểm ra mắt</span>
                <div style="margin: 0px; padding: 6px 5px; display: table-cell; width: auto; vertical-align: top; font-size: 13px; color: #666666;">08/2018</div>
              </li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
</div>

<!-- MiniCart display -->
<div class="support-cart mini-cart">
  <a class="btn-support-cart" href="../cart.html">
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

<!-- Footer -->
@stop
