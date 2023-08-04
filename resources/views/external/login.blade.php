@extends('externalLayout.main')

@section('title')
    Contact
@endsection
@section('breadcrumb')
    Contact
@endsection

@section('content')


<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-lg-8 col-md-8 ">
                @include('includes.messages')
                <div class="contact__form ">
                    <form action="{{route('customer-login')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <input type="password" name="password" placeholder="password">
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="site-btn"> Login </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection




