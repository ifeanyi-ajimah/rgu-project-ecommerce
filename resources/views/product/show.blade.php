@extends('adminlayout.main')
@section('title')
    Show Product
@endsection
@section('breadcrumb_one')
    Product Index
@endsection
@section('breadcrumb_link')
/product
@endsection
@section('breadcrumb')
Show Product
@endsection 
@section('content')

<div class="wrapper wrapper-content animated fadeInRight ecommerce">
<div class="row">
    <div class="col-lg-12">

        <div class="ibox product-detail">
            <div class="ibox-content">

                <div class="row">
                    <div class="col-md-5">


                        <div class="product-images">
                            <div>
                                <div class="image-imitation">
                                    <img src="{{ $product->image }}" width="100%" max-height="20px" alt="">
                                </div>
                            </div>
                            @foreach ($product->product_images as $image)
                                <div>
                                    <div class="image-imitation">
                                        <img src="{{ $image->name }}" width="100%" max-height="20px" alt="">
                                    </div>
                                </div>
                            @endforeach
                            
                            


                        </div>

                    </div>
                    <div class="col-md-7">

                        <h2 class="font-bold m-b-xs">
                            {{$product->name}}
                        </h2>
                        {{-- <small>Many desktop publishing packages and web page editors now.</small> --}}
                        <div class="m-t-md">
                            <h2 class="product-main-price">₦  {{ number_format($product->price)}} <small class="text-muted"> </small> </h2>
                        </div>
                        <hr>

                        <h4>Product description</h4>

                        <div class="small text-muted">
                            {{ $product->description }}
                            <br/>
                            <br/>
                            
                        </div>
                        <dl class="small m-t-md">
                            <dt> Amount in stock </dt>
                            <dd> {{ number_format($product->amount_in_stock) }}</dd>
                            <dt>Availabiliy</dt>
                            <dd> {{$product->is_available ? "Available" : "Not Available." }}</dd>
                            {{-- <dd>Donec id elit non mi porta gravida at eget metus.</dd> --}}
                            <dt> Uploaded By</dt>
                            <dd> {{$product->user->name}} </dd>
                        </dl>
                        <hr>

                        <div>
                            {{-- <div class="btn-group">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="ibox-footer">
                <span class="float-right">
                    Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                </span>
                
            </div>
        </div>

    </div>
</div>
</div>
    
@endsection

@section('scripts')

<script>
    $(document).ready( function(){
        $('.product-images').slick({
            dots: true
        });
    });

</script>
    
@endsection


{{-- protected $fillable = ['', '', 'user_id', 'image', '', 'amount_in_stock','is_available' ]; --}}