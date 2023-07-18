
@if (session('status'))
<div class="alert alert-success alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>{{ session('status') }}</strong>
</div>
@endif

@if (session('nooffer'))
<div class="alert alert-danger alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>{{ session('nooffer') }}</strong>
</div>
@endif

@if($errors->any())
    <div class=" alert alert-danger alert-dismissable">

        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>

@endif

@if (session('error_note'))
<div class="alert alert-danger alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>{{ session('error_note') }}</strong>
</div>
@endif



