<!DOCTYPE html>
<html lang="vn">

<!-- Mirrored from phonestorewebsite.000webhostapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 07:33:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="Lwy3kXvXtJ6UTTzBc0o5Re8YdQ0452rbdPlxnhWG">

  <title> Trang Chủ - ComputerStore </title>
  <link rel="icon" href="{{url('public/Customer')}}/images/favicon.png" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Embed CSS -->
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/normalize.min.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/animate.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/common/css/sweetalert2.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{url('public/Customer')}}/css/style.css">
  <link rel="stylesheet" href="{{url('public/Customer')}}/css/minicart.css">
  <style>

  </style>
</head>
<body>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v4.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="106507137419133"
    theme_color="#ff3300"
    logged_in_greeting="Computer Store kính chào quý khách!"
    logged_out_greeting="Computer Store kính chào quý khách!">
  </div>

  <!-- Header -->
  <header id="header" class="header">
    <div class="container">
      <div class="row display-flex">
        <div class="col-md-2 margin-auto trigger-menu">

          <button type="button" class="navbar-toggle collapsed visible-xs" id="trigger-mobile">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="logo">
            <a class="logo-wrapper" href="{{route('index')}}" title="ComputerStore"><img src="{{url('public/Customer')}}/images/logo.png" alt="ComputerStore"></a>
          </div>
        </div>
        <div class="col-md-3 margin-auto">
          <div class="search">
            <form class="search-bar" action="https://phonestorewebsite.000webhostapp.com/search" method="get" accept-charset="utf-8">
              <input class="input-search" type="search" name="search_key" placeholder="Tìm Kiếm..." autocomplete="off">
              <button type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>
        <div class="col-md-7 hd-bg-white main-menu-responsive">
          <div class="main-menu">
            <div class="nav">
              <ul>
                <li class="nav-item active"><a href="{{route('index')}}" title="Trang Chủ">
                  <span class="fas fa-home"></span>
                Trang Chủ</a>
              </li>
              <li class="nav-item "><a href="{{route('about')}}" title="Giới Thiệu">
                <span class="fas fa-info"></span>
              Giới Thiệu</a>
            </li>
            <li class="nav-item dropdown ">
              <a href="products.html" title="Sản Phẩm">
                <span class="fas fa-mobile-alt"></span>
                Sản Phẩm <i class="fas fa-angle-down"></i>
              </a>
              <div class="dropdown-menu">
                <ul class="dropdown-menu-item">
                  <li>
                    <h4>Hãng Sản Xuất</h4>
                    <ul class="dropdown-menu-subitem">
                      <li class=""><a href="producer/1.html" title="Apple">Apple</a></li>
                      <li class=""><a href="producer/2.html" title="Samsung">Samsung</a></li>
                      <li class=""><a href="producer/3.html" title="Sony">Sony</a></li>
                      <li class=""><a href="producer/4.html" title="OPPO">OPPO</a></li>
                      <li class=""><a href="producer/5.html" title="Huawei">Huawei</a></li>
                      <li class=""><a href="producer/6.html" title="Xiaomi">Xiaomi</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item "><a href="posts.html" title="Tin Tức">
              <span class="far fa-newspaper"></span>
            Tin Tức</a>
          </li>
          <li class="nav-item "><a href="contact.html" title="Liên Hệ">
            <span class="fas fa-id-card"></span>
          Liên Hệ</a>
        </li>
      </ul>
    </div>
    <div class="accout-menu">
      @if(Auth::check())
      <div class="not-logged-menu">
        <ul>
          <li class="menu-item "><a href="" title="Đăng Nhập">
            <span class="fas fa-user"></span>
          {{Auth::user()->name}}</a>
        </li>
        <li class="menu-item "><a href="{{route('logout')}}" title="Đăng xuất" onclick="return confirm('Thoát tài khoản?')">
          <span class="fas fa-key"></span>
        Đăng xuất</a>
      </li>
    </ul>
  </div>
  @else
   <div class="not-logged-menu">
        <ul>
          <li class="menu-item "><a href="{{route('login')}}" title="Đăng Nhập">
            <span class="fas fa-user"></span>
          Đăng Nhập</a>
        </li>
        <li class="menu-item "><a href="{{route('register')}}" title="Đăng Ký">
          <span class="fas fa-key"></span>
        Đăng Ký</a>
      </li>
    </ul>
  </div>
@endif


</div>
</div>
</div>
</div>
</div>
</header><!-- /header -->


<div class="backdrop__body-backdrop___1rvky"></div>
<div class="mobile-main-menu">
  <div class="mobile-main-menu-top">
    <div class="mb-menu-top-header">
      <div class="mb-menu-logo">
        <a class="logo-wrapper" href="{{route('index')}}" title="PhoneStore">
          <img src="{{url('public/Customer')}}/images/logo.png" alt="PhoneStore">
        </a>
      </div>
      <button type="button" id="close-trigger-mobile">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="mb-menu-top-body">
      <div class="mb-menu-user">
        <div style="background-image: url('public/Customer/images/no_login.svg');"></div>
      </div>
      <div class="mb-menu-info">
        <div class="info-top">Đăng Nhập</div>
        <div class="info-bottom">Để nhận nhiều ưu đãi hơn</div>
      </div>
    </div>
    <div class="mb-menu-top-footer">
      <div class="mb-menu-action">
        <a href="{{route('login')}}" class="btn btn-success">
          <i class="fas fa-user"></i> Đăng Nhập
        </a>
      </div>
      <div class="mb-menu-action">
        <a href="register.html" class="btn btn-warning">
          <i class="fas fa-key"></i> Đăng Ký
        </a>
      </div>
    </div>
  </div>
  <div class="mobile-main-menu-middle">
    <div class="mb-menu-middle-header">
      <h3>DANH MỤC</h3>
    </div>
    <div class="mb-menu-middle-body">
      <ul>
        <li class="mb-nav-item active"><a href="{{route('index')}}" title="Trang Chủ">
          <span class="fas fa-home"></span>
        Trang Chủ</a>
      </li>
      <li class="mb-nav-item "><a href="{{route('about')}}" title="Giới Thiệu">
        <span class="fas fa-info"></span>
      Giới Thiệu</a>
    </li>
    <li class="mb-nav-item has-item-child ">
      <a href="products.html" title="Sản Phẩm">
        <span class="fas fa-mobile-alt"></span>
        Sản Phẩm
      </a>
      <button id="action-collapse" data-toggle="collapse" data-target="#item-child-collapse"><i class="fas fa-plus"></i></button>
      <div id="item-child-collapse" class="collapse">
        <ul>
          <li class=""><a href="producer/1.html" title="Apple">Apple</a></li>
          <li class=""><a href="producer/2.html" title="Samsung">Samsung</a></li>
          <li class=""><a href="producer/3.html" title="Sony">Sony</a></li>
          <li class=""><a href="producer/4.html" title="OPPO">OPPO</a></li>
          <li class=""><a href="producer/5.html" title="Huawei">Huawei</a></li>
          <li class=""><a href="producer/6.html" title="Xiaomi">Xiaomi</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-nav-item "><a href="posts.html" title="Tin Tức">
      <span class="far fa-newspaper"></span>
    Tin Tức</a>
  </li>
  <li class="mb-nav-item "><a href="contact.html" title="Liên Hệ">
    <span class="fas fa-id-card"></span>
  Liên Hệ</a>
</li>
</ul>
</div>
</div>
<div class="mobile-main-menu-bottom">
  <div class="mobile-support">
    <div class="text-support">HỖ TRỢ</div>
    <div class="info-support">
      <i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: <a href="tel: +84 967 999 999" title="(+84) 967 999 999">(+84) 967 999 999</a>
    </div>
    <div class="info-support">
      <i class="fa fa-envelope" aria-hidden="true"></i> EMAIL: <a href="mailto:phonestore@gmail.com" title="phonestore@gmail.com">phonestore@gmail.com</a>
    </div>
  </div>
</div>
</div>

@yield('main')
<!-- Footer -->
<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 col-ssm">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>Về Chúng Tôi</h3>
            </div>
            <div class="widget-content">
              <p><b><i class="fas fa-mobile-alt"></i> Hotline:</b> <a href="tel:(+84) 967 999 999">(+84) 967 999 999</a></p>
              <p><b><i class="fas fa-envelope"></i> Email:</b> <a href="mailto:phonestore@gmail.com" rel="nofollow">phonestore@gmail.com</a></p>
              <p><b><i class="fas fa-store-alt"></i> Địa chỉ:</b> Số 1 Đại Cồ Việt, Bách Khoa, Hai Bà Trưng, Hà Nội.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 hidden-sm hidden-xs">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>Hỗ Trợ Khách Hàng</h3>
            </div>
            <div class="widget-content">
              <ul>
                <li><a href="#" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                <li><a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>
                <li><a href="#" title="Chính sách đổi trả hàng">Chính sách đổi trả hàng</a></li>
                <li><a href="#" title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 col-ssm">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>Hỗ Trợ Thanh Toán</h3>
            </div>
            <div class="widget-content">
              <ul>
                <li class="clearfix">
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="Thanh toán bằng thẻ Visa."><div class="payment visa"><img src="{{url('public/Customer')}}/images/visa.png"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="Thanh toán bằng thẻ MasterCard."><div class="payment"><img src="{{url('public/Customer')}}/images/mastercard.png"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="Thanh toán bằng thẻ JCB."><div class="payment"><img src="{{url('public/Customer')}}/images/jcb.png"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="Thanh toán khi nhận hàng."><div class="payment"><img src="{{url('public/Customer')}}/images/cod.png"></div></div>
                </li>
                <li>
                  <div class="payment-service" title="Giải pháp thanh toán qua Ngân Lượng."><img src="{{url('public/Customer')}}/images/nganluong.png"></div>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 hidden-xs">
            <div class="footer-widget">
              <div class="widget-title">
                <h3>Theo Dõi Chúng Tôi</h3>
              </div>
              <div class="widget-content">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPhone-Store-106507137419133%2F%3Fmodal%3Dadmin_todo_tour&amp;tabs=timelinewww.facebook.com&amp;width=270&amp;height=130&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="270" height="130" style="border: none; overflow: hidden; max-width: 100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="copyright text-center">
        Copyright &copy 2019 Hoang Lam. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Embed Scripts -->
  <script src="{{url('public/Customer')}}/common/js/jquery-3.3.1.js"></script>
  <script src="{{url('public/Customer')}}/common/js/bootstrap.min.js"></script>
  <script src="{{url('public/Customer')}}/common/js/owl.carousel.min.js"></script>
  <script src="{{url('public/Customer')}}/common/js/sweetalert2.min.js"></script>

  <!-- Custom Scripts -->
  <script src="{{url('public/Customer')}}/js/custom.js"></script>
  <script src="{{url('public/Customer')}}/js/minicart.js"></script>
  <script>
    $(document).ready(function(){
      $("#slide-advertise").owlCarousel({
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        nav: true,
        dots: true,
        dotsData: true,
        responsive:{
          0:{
            nav:false,
            dots: false
          },
          641:{
            nav:true,
            dots: true
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        dotsContainer: '.custom-dots-slide-advertises'
      });

      $("#slide-favorite").owlCarousel({
        items: 5,
        autoplay: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items:1,
            nav:false
          },
          480:{
            items:2,
            nav:false
          },
          769:{
            items:3,
            nav:true
          },
          992:{
            items:4,
            nav:true,
          },
          1200:{
            items:5,
            nav:true
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
      });

    });
  </script>
  <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="../cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #6747c7 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(103,71,199, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff4546;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,69,70, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff4546 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #6747c7 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.79/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Don’t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>')}</script><script type="text/javascript" src="../a.opmnstr.com/app/js/api.min.js" data-campaign="f6brbmuxflyqoriatchv" data-user="71036" async></script></body>

  <!-- Mirrored from phonestorewebsite.000webhostapp.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 07:33:57 GMT -->
  </html>
