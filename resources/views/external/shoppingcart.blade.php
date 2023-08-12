@extends('externalLayout.main')

@section('title')
    Check Out
@endsection
@section('breadcrumb')
    Check Out
@endsection
@section('content')
 <!-- Shopping Cart Section Begin -->
 <section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carts as $cart)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-1.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6> {{$cart->product->name }} </h6>
                                        <h5> {{ $cart->price }} </h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2 ">
                                            <input class="itemCount" id="qty{{ $cart->id }}" type="number" min="1" data-id="{{$cart->id}}" value="{{$cart->quantity}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price"   > $ <span  id="tprice{{ $cart->id }}" > {{ $cart->total_price }} </span> </td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            @empty
                                <p>No Cart Item </p>
                            @endforelse
                            {{-- <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-2.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 32.50</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-3.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 47.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/shopping-cart/cart-4.jpg" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>$98.49</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$ 30.00</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="shop">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$ 169.50</span></li>
                        <li>Total <span>$ 169.50</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

@endsection

@section('scripts')
<script>

    $('.itemCount').on('change', function (e) {
        var cart_id = $(this).data('id'); 
        var new_qty = $("#qty"+cart_id).val();
        // alert(new_qty);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
        
                url = '/cart-update/'+cart_id,
                formData = {
                    id : cart_id,
                    qty : new_qty,
                }
                $.post(url, formData).done(function (data) {
                    //console.log(cart_id)
                    //    console.log(data.response.data.total_price);
                    //    $("#tprice"+cart_id).val(data.response.data.total_price)
                    console.log( $("#tprice"+cart_id).val()  )
                    }).fail(function (error) {
                        console.log(error);
                    });
             });
</script>

@endsection

