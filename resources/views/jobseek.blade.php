@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

      <section class="page_title cs gradientvertical-background s-py-25">
        <div class="container">
          <div class="row">

            <div class="divider-50"></div>

            <div class="col-md-12 text-center">
              <h1 class="">{{$cms_job->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_job->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


      

      <section class="icon-boxed teaser-box ls s-py-lg-130 c-my-lg-10 s-parallax">
        <div class="container">
          <div class="row">
            @foreach ($jobs as $job)
            <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <h3>
                  <a href="javascript:void(0)">{{$job->name}}</a>
                </h3>
                <?= html_entity_decode($job->description) ?>
                @if (!Auth::guest())
                    
                <form action="{{route('apply', ['user_id' => Auth::id(), 'job_id' => $job->id])}}" method="post">
                  @csrf
                  <button class="sub">APPLY NOW</button> 
                </form>
                  
               @else
                   <a href="{{route('registration', ['id' => $job->id])}}"> APPLY NOW</a>     
                @endif
                
              </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-cloud"></i>
                </div>
                <h3>
                  <a href="#">Senior Developer</a>
                </h3>
                <p>
                  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </p>
                <a href="{{route('registration')}}"> APPLY NOW</a>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-database"></i>
                </div>
                <h3>
                  <a href="#">Manager</a>
                </h3>
                <p>
                  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </p>
                <a href="{{route('registration')}}"> APPLY NOW</a>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <h3>
                  <a href="#">Junior Developer</a>
                </h3>
                <p>
                  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </p>
                <a href="{{route('registration')}}"> APPLY NOW</a>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <h3>
                  <a href="#">Junior Developer</a>
                </h3>
                <p>
                  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </p>
                <a href="{{route('registration')}}"> APPLY NOW</a>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 animate" data-animation="pullUp">
              <div class="icon-box text-center hero-bg box-shadow">
                <div class="teaser-icon icon-styled bg-maincolor3">
                  <i class="fa fa-unlock-alt"></i>
                </div>
                <h3>
                  <a href="#">Junior Developer</a>
                </h3>
                <p>
                  pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                </p>
                <a href="{{route('registration')}}"> APPLY NOW</a>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      
<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

  .sub{
    color: #808080;
    text-decoration: none;
    border: none;
  }

  .sub:hover{
    color: #55bce7;
    text-decoration: none;
    border: none;
  }

</style>
@endsection

@section('js')
<script type="text/javascript"></script>

@endsection