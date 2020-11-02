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
              <h1 class="">{{$cms_emp3->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_emp3->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


      <section class="ls about about-padge staffing_solution s-pt-30">
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
                  {{$cms_emp1->name}}
                </h3>
                <?= html_entity_decode($cms_emp1->content) ?>
                
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
              <img src="{{asset($cms_emp1->image)}}" alt="person01.jpg">
            </div>
          </div>
        </div>
      </section>



      <section class="ls about about-padge staffing_solution s-pt-30">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
              <img src="{{asset($cms_emp2->image)}}" alt="person01.jpg">
            </div>
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
              <div class="heading-about">
                <!-- <h2>
                  HR
                </h2>
                <h4>
                  Welcome to
                </h4> -->
                <h3>
                    {{$cms_emp2->name}}
                </h3>
                <?= html_entity_decode($cms_emp2->content) ?>
                
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
            
          </div>
        </div>
      </section>
      
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