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
                <div class="contact__form ">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Email">
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




