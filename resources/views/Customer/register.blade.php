@extends('Customer/master')
@section('main')
<div class="container">
  <!-- Site Content -->
  <div class="site-content">
    <section class="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Đăng Ký</li>
        </ol>
      </nav>
    </section>
    <div class="site-register">
      <div class="register-body">
        <h2 class="title">Đăng Ký</h2>
        <!-- https://phonestorewebsite.000webhostapp.com/register -->
        <form action="" method="POST" accept-charset="utf-8" >         
          @csrf
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          <!-- <input type="hidden" name="_token" value="Lwy3kXvXtJ6UTTzBc0o5Re8YdQ0452rbdPlxnhWG"> -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-user"></i></span>
            <input id="name" type="text" class="form-control " name="name" placeholder="Name" value="" required autocomplete="name" autofocus>
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
            <input id="email" type="email" class="form-control " name="email" placeholder="Email" value="" required autocomplete="email">
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-mobile"></i></span>
            <input id="phone" type="tel" class="form-control " name="phone" placeholder="Phone" value="" required autocomplete="phone">
          </div>

            <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
            <input id="address" type="text" class="form-control " name="address" placeholder="Address" required autocomplete="address">
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
            <input id="password" type="password" class="form-control " name="password" placeholder="Password" required autocomplete="new-password">
          </div>
          
          <div class="input-group">
            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
          </div>

          <button type="submit" class="btn btn-default">REGISTER</button>
        </form>
      </div>
      <div class="register-social">
        <div class="register-social-text">Or Register With</div>
        <div class="row">
          <div class="col-md-6">
            <a href="#" title="Facebook" class="btn btn-defaule"><i class="fab fa-facebook-square"></i> Facebook</a>
          </div>
          <div class="col-md-6">
            <a href="#" title="Google" class="btn btn-defaule"><i class="fab fa-google"></i> Google</a>
          </div>
        </div>
      </div>
      <div class="sign-in-now">
        You are a member? <a href="login.html">Sign in now</a>
      </div>
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