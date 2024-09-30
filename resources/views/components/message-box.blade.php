@if ($message = Session::get('success'))
<div class="row">
    <div class="col-lg-8 col-md-10 col-xs-12 centerize-col">
        <div class="border-radius-25 alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line"></i></button>
              {{ $message }}
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="row">
    <div class="col-lg-8 col-md-10 col-xs-12 centerize-col">
        <div class="border-radius-25 alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line"></i></button>
            {{ $message }}
          </div>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="row">
    <div class="col-lg-8 col-md-10 col-xs-12 centerize-col">
        <div class="border-radius-25 alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line"></i></button>
            {{ $message }}
          </div>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="row">
    <div class="col-lg-8 col-md-10 col-xs-12 centerize-col">
        <div class="border-radius-25 alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line"></i></button>
            {{ $message }}
          </div>
    </div>
</div>
@endif

@if ($errors->any())
<div class="row">
    <div class="col-lg-8 col-md-10 col-xs-12 centerize-col">
        <div class="border-radius-25 alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="icofont icofont-close-line"></i></button>
            このフォームに問題があります
          </div>
    </div>
</div>
@endif