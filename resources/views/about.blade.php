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
              <h1 class="">{{$cms_about2->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{asset('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_about2->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


      <section class="ls about about-padge s-pt-30">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
              <div class="heading-about">
                <!-- <h2>
                  HR
                </h2>
                <h4>
                  Welcome to
                </h4> -->
                <h3>
                  {{$cms_about->name}}
                </h3>
                <?= html_entity_decode($cms_about->content) ?>
                <a href="{{asset('contact')}}">Contact us</a>
              </div>
              <!-- <div class="icons-list">
                <ul class="list-bordered">
                  <li class=" media media-body">
                    <i class="teaser-icon fa fa-rocket"></i>
                    <h4 class="title">
                      <span>638</span> Companies We Helped
                    </h4>
                  </li>
                  <li class="media media-body">
                    <i class="teaser-icon fa fa-briefcase"></i>
                    <h4 class="title">
                      <span>12</span> Corporate Programs
                    </h4>
                  </li>
                  <li class="media media-body">
                    <i class="teaser-icon fa fa-graduation-cap"></i>
                    <h4 class="title">
                      <span>28</span> Trainings Courses
                    </h4>
                  </li>
                  <li class="border-bottom-0 media media-body">
                    <i class="teaser-icon fa fa-user"></i>
                    <h4 class="title">
                      <span>125</span> Strategic Partners
                    </h4>
                  </li>
                </ul>
              </div> -->
            </div>
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
              <img src="{{asset($cms_about->image)}}" alt="person01.jpg">
            </div>
          </div>
        </div>
      </section>

      @include('widgets.recruitment')

      <!-- <section class="ls collapse-section about">
        <div class="row">
          <div class="col-lg-6">
            <div class="image_cover image_cover_left half-image">
            </div>
          </div>
          <div class="col-lg-6 collapse-table">
            <div class="contact-header collapse-header heading pt-30">
              <h5>
                Receiving
              </h5>
              <h4>
                A job offer
              </h4>
            </div>
            <div id="accordion01" role="tablist">
              <div class="card-header" role="tab" id="collapse01_header">
                <h5>
                  <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                    Be decisive
                  </a>
                </h5>
              </div>
              <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                <div class="card-body">
                  Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                </div>
              </div>
              <div class="card-header" role="tab" id="collapse02_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    Or take your time
                  </a>
                </h5>
              </div>
              <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                <div class="card-body">
                  Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                </div>
              </div>
              <div class="card-header" role="tab" id="collapse03_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    Resign
                  </a>
                </h5>
              </div>
              <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                <div class="card-body">
                  Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                </div>
              </div>


              <div class="card-header" role="tab" id="collapse04_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    Counter offers
                  </a>
                </h5>
              </div>
              <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                <div class="card-body">
                  Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->


<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>

@endsection