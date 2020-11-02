@extends('layouts.main')
@section('content')


<section class="page_title cs gradientvertical-background s-py-25">
        <div class="container">
          <div class="row">

            <div class="divider-50"></div>

            <div class="col-md-12 text-center">
              <h1 class="">Reset Password</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  Reset Password
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


<section class="Registration-sec padding-80">
  <div class="container">
    <div class="row" style="display: inherit;">
<main class="my-cart">
    <!-- banner start -->
    <!-- <div class="banner">
        <div class="container">
            
            
        </div>
    </div> -->
    <!-- banner end -->



<!-- main content start -->
<div class="login-pg-forms">
  <div class="container">
    <div class="col-md-12">
      <div class="row" style="display: inherit;">

        <div class="col-md-6 col-sm-offset-3">
        <div class="rgster-login-form login-form">
          <!-- <h2>Reset Password</h2>  -->
        
                            
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form class="form bordered-input" method="POST" action="{{ route('password.email') }}">
                                {{csrf_field()}}
                                <div class="p-30 pb-0">
                                <p>Enter your email to help us identify you.</p>
                                <div class="form-group m-t-20 row">
                                    <div class="col-12">
                                        <input class="form-control pl-0 font-12 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="text" placeholder="email" style="padding-left: 10px !important;">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group row m-b-10">
                                    <div class="col-12">
                                        <p><button type="submit" class="btn-block  btn btn-rounded btn-primary m-b-20 waves-effect waves-light d-block">Send Reset Instruction</button></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="clearfix"></div>
                            <div class="pl-3 pt-1 pb-3 pl-3"><a href="{{url('signin')}}">Return to login</a>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                   
  </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- main content end -->   
</main>
</div>
</div>
</section>


@endsection
@section('css')

<link rel="stylesheet" href="{{asset('css/checkout.css')}}">

<style type="text/css">
    
input.form-control.pl-0.font-12 {
    padding: 23px;
    margin-top: 15px;
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding: 10px;
}

section.Registration-sec {
    background-color: transparent;
    padding: 54px 0px;
}

.btn-primary{
      color: #fff;
    background-color: #55bce7;
    border-color: #55bce7;
}

.btn-primary:hover {
    color: black;
    background-color: #fff;
    border-color: #55bce7;
}

</style>
@endsection
@section('js')
<script type="text/javascript">
     $(document).on('click', ".btn1", function(e){
            // alert('it works');
            $('.loginForm').submit();
     });
</script>
@endsection