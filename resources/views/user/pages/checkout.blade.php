

@extends('layouts.shop')

@section('checkout')


<main class="main-wrapper">

<!-- Start Checkout Area  -->
<div class="axil-checkout-area axil-section-gap">
    <div class="container">
    <form class="needs-validation" method="post" action="{{route('user.storecheckout')}}">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="axil-checkout-notice">
                        <div class="axil-toggle-box">
                            
                            <div class="axil-checkout-login toggle-open">
                                <p>If you didn't Logged in, Please Log in first.</p>
                                <div class="signin-box">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group mb--0">
                                        <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="axil-toggle-box">
                            
                            <div class="axil-checkout-coupon toggle-open">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="input-group">
                                    <input placeholder="Enter coupon code" type="text">
                                    <div class="apply-btn">
                                        <button type="submit" class="axil-btn btn-bg-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="axil-checkout-billing">
                        <h4 class="title mb--40">Billing details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" id="first-name" name="f_name" placeholder="Adam">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" id="last-name" name="l_name" placeholder="John">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company_name" id="company-name">
                        </div>
                        <div class="form-group">
                            <label >Country/ Region <span>*</span></label>
                            <select name="rehion" id="Region">
                                <option value="Australia">Australia</option>
                                <option value="England">England</option>
                                <option value="Zealand">New Zealand</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Kindom">United Kindom (UK)</option>
                                <option value="USA">United States (USA)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Street Address <span>*</span></label>
                            <input type="text" id="address1" class="mb--15" name="street" placeholder="House number and street name">
                            <input type="text" id="address2" name="suite" placeholder="Apartment, suite, unit, etc. (optonal)">
                        </div>
                        <div class="form-group">
                            <label>Town/ City <span>*</span></label>
                            <input type="text" id="town" name="city">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" id="country" name="country">
                        </div>
                        <div class="form-group">
                            <label>Phone <span>*</span></label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Email Address <span>*</span></label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group input-group">
                            <input type="checkbox" id="checkbox1" name="account-create">
                            <label for="checkbox1">Create an account</label>
                        </div>
                        <div class="form-group different-shippng">
                            <div class="toggle-bar">
                                <a href="javascript:void(0)" class="toggle-btn">
                                    <input type="checkbox" id="checkbox2" name="diffrent-ship">
                                    <label for="checkbox2">Ship to a different address?</label>
                                </a>
                            </div>
                            <div class="toggle-open">
                                <div class="form-group">
                                    <label>Country/ Region <span>*</span></label>
                                    <select id="Region">
                                        <option value="3">Australia</option>
                                        <option value="4">England</option>
                                        <option value="6">New Zealand</option>
                                        <option value="5">Switzerland</option>
                                        <option value="1">United Kindom (UK)</option>
                                        <option value="2">United States (USA)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Street Address <span>*</span></label>
                                    <input type="text" id="address1" class="mb--15" placeholder="House number and street name">
                                    <input type="text" id="address2" placeholder="Apartment, suite, unit, etc. (optonal)">
                                </div>
                                <div class="form-group">
                                    <label>Town/ City <span>*</span></label>
                                    <input type="text" id="town">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" id="country">
                                </div>
                                <div class="form-group">
                                    <label>Phone <span>*</span></label>
                                    <input type="tel" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Notes (optional)</label>
                            <textarea id="notes" rows="2" placeholder="Notes about your order, e.g. speacial notes for delivery."></textarea>
                        </div>
                    </div>
                </div>
             

                <div class="col-lg-6">
                    <div class="axil-order-summery order-checkout-summery">
                  
                        <h5 class="title mb--20">Your Order</h5>
                        <div class="summery-table-wrap">
                            <table class="table summery-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $total = 0 @endphp 
                        @if(session('carts'))
                        @foreach(session('carts') as $id => $details)
                        @php $total += $details ['category'] * $details ['quantity'] @endphp
                                    <tr class="order-product">
                                        <td>{{$details ['name']}}<span class="quantity">x{{$details ['quantity']}}</span></td>
                                        <td>${{$details ['category'] * $details ['quantity']}}</td>
                                    </tr>
                                    
                                    @endforeach 
                                @endif
                                    <tr class="order-shipping">
                                        <td colspan="2">
                                            <div class="shipping-amount">
                                                <span class="title">Shipping Method</span>
                                                <span class="amount">$35.00</span>
                                            </div>
                                            <div class="input-group">
                                                <input type="radio" id="radio1" name="shipping" checked>
                                                <label for="radio1">Free Shippping</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="radio" id="radio2" name="shipping">
                                                <label for="radio2">Local</label>
                                            </div>
                                            <div class="input-group">
                                                <input type="radio" id="radio3" name="shipping">
                                                <label for="radio3">Flat rate</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>Total</td>
                                        <td class="order-total-amount">${{$total}}</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                           
                        </div>
                        <div class="order-payment-method">
                            <div class="single-payment">
                                <div class="input-group">
                                    <input type="radio" id="radio4" name="payment">
                                    <label for="radio4">Direct bank transfer</label>
                                </div>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                            </div>
                            <div class="single-payment">
                                <div class="input-group">
                                    <input type="radio" id="radio5" name="payment">
                                    <label for="radio5">Cash on delivery</label>
                                </div>
                                <p>Pay with cash upon delivery.</p>
                            </div>
                            <div class="single-payment">
                                <div class="input-group justify-content-between align-items-center">
                                    <input type="radio" id="radio6" name="payment" checked>
                                    <label for="radio6">Paypal</label>
                                    <img src="/asset/images/others/payment.png" alt="Paypal payment">
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                            </div>
                        </div>
                        <button type="submit" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div>

<!-- End Checkout Area  -->

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