

@extends('layouts.shop')

@section('cart')

<script src="https://cdn.jsdelivr.net/npmjquery@3.7.0/dist/jquery.min.js"></script>
<main class="main-wrapper">

<!-- Start Cart Area  -->
<div class="axil-product-cart-area axil-section-gap">
    <div class="container">
        <div class="axil-product-cart-wrap">
            <div class="product-table-heading">
                <h4 class="title">Your Cart</h4>
                <a href="#" class="cart-clear">Clear Shoping Cart</a>
            </div>
            <div class="table-responsive">
                <table class="table axil-product-table axil-cart-table mb--40">
                    <thead>
                        <tr>
                            <th scope="col" class="product-remove"></th>
                            <th scope="col" class="product-thumbnail">Product</th>
                            <th scope="col" class="product-title"></th>
                            <th scope="col" class="product-price">Price</th>
                            <th scope="col" class="product-quantity">Quantity</th>
                            <th scope="col" class="product-subtotal">Subtotal</th>
                    </thead>
                    <tbody>
                    @php $total = 0 @endphp 
                        @if(session('carts'))
                        @foreach(session('carts') as $id => $details)
                        @php $total += $details ['category'] * $details ['quantity'] @endphp
                       
                        <tr rowId={{$id}}>
                            <td class="product-remove">
                                
                            <a    class="remove-wishlist" onclick="showDeleteConfirmation()"><i class="fal fa-times"></i></a>
                        
                        
                        </td>
                            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$details ['photo'])}}"></td>
                      
                            <td class="product-title"><a href="{{route('user.cart')}}">{{$details ['name']}}</a></td>
                            <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>{{$details ['category']}}</td>
                            <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol"></span>{{$details ['quantity'] }}</td>

                            <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>{{$details ['category'] * $details ['quantity'] }}</td>
                        </tr>
                       @endforeach
                       @endif
                    </tbody>
                </table>
            </div>
            <div class="cart-update-btn-area">
                <div class="input-group product-cupon">
                    <input placeholder="Enter coupon code" type="text">
                    <div class="product-cupon-btn">
                        <button type="submit" class="axil-btn btn-outline">Apply</button>
                    </div>
                </div>
                <div class="update-btn">
                    <a href="#" class="axil-btn btn-outline">Update Cart</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                    <div class="axil-order-summery mt--80">
                        <h5 class="title mb--20">Order Summary</h5>
                        <div class="summery-table-wrap">
                            <table class="table summery-table mb--30">
                                <tbody>
                                    <tr class="order-subtotal">
                                        <td>Subtotal</td>
                                        <td>${{$total}}</td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td>Shipping</td>
                                        <td>
                                            <div class="input-group">
                                                <input type="radio" id="radio1" name="shipping" checked>
                                                <label for="radio1">Free Shippping</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="radio" id="radio2" name="shipping">
                                                <label for="radio2">Local: $35.00</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="radio" id="radio3" name="shipping">
                                                <label for="radio3">Flat rate: $12.00</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="order-tax">
                                        <td>State Tax</td>
                                        <td>$8.00</td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>Total</td>
                                        <td class="order-total-amount">$125.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{route('user.checkout')}}" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Area  -->

</main>
<div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            @php $total = 0 @endphp 
            @if(session('carts'))
                        @foreach(session('carts') as $id => $details  )
@php $total += $details ['category'] * $details ['quantity'] @endphp
            <div class="cart-body">
                <ul class="cart-item-list">
                 
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{route('user.variation1')}}"><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$details ['photo'])}}"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="{{route('user.variation1')}}-3">{{$details ['name']}}</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>{{$details ['category']}}</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" value="{{$details ['quantity']}}" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>









                   
                </ul>
              
            </div>
            @endforeach
                       @endif
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">${{$total}}</span>
                </h3>
                <div class="group-btn">
                    <a href="{{route('user.cart')}}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{route('user.checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    @stop
    @section('script')

<script>
      // تعريف دالة JavaScript لعرض رسالة حذف
      function showDeleteConfirmation() {
          // استخدم دالة confirm لعرض مربع حوار يحتوي على خيارين (موافق أو إلغاء)
          var result = confirm("هل أنت متأكد من رغبتك في حذف هذا العنصر؟");
var ele =$(thes);
          // تحقق من قرار المستخدم
          if (result) {
              // إذا قام المستخدم بالنقر على "موافق"، يمكنك تنفيذ الإجراء الخاص بالحذف هنا
              $.ajax({
    url: '{{route('remove_from')}}',
    method:"DELETE",
    data:{_token: '{{csrf_token()}}',
    id : ele.parents("tr").attr("data-id")



},
success: function (response){
    window.location.reload();
}
});
          } else {
              // إذا قام المستخدم بالنقر على "إلغاء"، يمكنك تنفيذ الإجراء المناسب هنا
              alert("لم يتم حذف العنصر.");
          }
      }
  </script>
@endsection