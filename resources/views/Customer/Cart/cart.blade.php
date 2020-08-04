@if( isset($cart))
<p>ok</p>
@else
<p>no</p>
@endif

  <ul class="list-item-cart">
          <li class="item productid-64"><a class="product-image" href="" title="TRỌN BỘ 4 CAMERA - TRẮNG">
            <img alt="TRỌN BỘ 4 CAMERA - TRẮNG" src="{{url('public/Customer')}}/images/cod.png" width="80"></a>
            <div class="detail-item"><div class="product-details">
              <a href="javascript:;" data-id="64" title="Xóa" class="remove-item-cart fa fa-remove" data-url="
              " onclick="removeItem($(this));">
              <i class="fas fa-times"></i></a><p class="product-name"><a href="" title="TRỌN BỘ 4 CAMERA - TRẮNG">TRỌN BỘ 4 CAMERA - TRẮNG</a></p></div>
              <div class="product-details-bottom"><span class="price pricechange">4.900.000₫</span>
                <div class="quantity-select"><input class="variantID" type="hidden" name="variantId" value="64">
                  <button onclick="minus(64);" class="reduced items-count btn-minus" type="button">–</button>
                  <input type="text" disabled="" maxlength="3" min="1" max="20" onchange="if(this.value == 0)this.value=1;" class="input-text number-sidebar qty64" id="qty64" name="Lines" size="4" value="1" data-url="">
                  <button onclick="plus(64);" class="increase items-count btn-plus" type="button">+</button>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div>
          <div class="top-subtotal">Tổng cộng: <span class="price">4.900.000₫</span></div>
        </div>
        <div>
          <div class="actions clearfix"><a href="javascript:;" onclick="showCheckout($(this));" class="btn btn-gray btn-checkout" title="Thanh toán" data-url="http://www.thienlynhan.com/checkout"><span>Thanh toán</span></a><a href="/cart" class="view-cart btn btn-white margin-left-5" title="Giỏ hàng"><span>Giỏ hàng</span></a></div></div>