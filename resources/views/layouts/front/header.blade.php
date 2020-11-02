<?php $segment = Request::segments();?>

  <section class="page_toplogo ls s-py-15 text-center">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="d-lg-flex justify-content-lg-center align-items-lg-center">
                <span class="social-icons top">

                  <a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" class="fa fa-facebook " title="facebook" target="_blank"></a>
                  <a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" class="fa fa-twitter " title="twitter" target="_blank"></a>
                  <a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" class="fa fa-google " title="google" target="_blank"></a>
                  <a href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}" class="fa fa-linkedin " title="linkedin" target="_blank"></a>
                  <a href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}" class="fa fa-pinterest-p " title="pinterest" target="_blank"></a>
                </span>
              </div>
            </div>
            <div class="col-lg-4 text-center">
              <div class="text-center">
                <div class="header_logo_center">
                  <a href="{{route('home')}}" class="logo">
                    
                    <img src="{{asset($logo->img_path)}}" alt="">
                    
                  </a>
                </div>
                <!-- eof .header_left_logo -->
              </div>
            </div>
            <div class="col-lg-4">
              <a href="{{route('career')}}" class="btn-outline-darkgrey top_career  d-none d-lg-block">Careers</a>
            </div>
          </div>
        </div>
      </section>


      <!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
      <header class="page_header ls s-bordertop nav-narrow justify-nav-center text-center">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-xl-12">

              <div class="nav-wrap">
                <!-- main nav start -->
                <nav class="top-nav">
                  <ul class="nav sf-menu">
                    <li class="{{request()->routeIs('home') ? 'active' : '' }}">
                      <a href="{{route('home')}}">Home</a>
                    </li>
                    
                    <li class="{{request()->routeIs('job_seek') ? 'active' : '' }}">
                      <a href="{{route('job_seek')}}">Job Seeker</a>
                    </li>
                    
                    <li class="{{request()->routeIs('employers_resourses') ? 'active' : '' }}">
                      <a href="{{route('employers_resourses')}}">Employers resourses</a>
                    </li>
                    
                    <li class="{{request()->routeIs('drug') ? 'active' : '' }}">
                      <a href="{{route('drug')}}">Drug and alcohol policy</a>
                    </li>
                    
                    <li class="{{request()->routeIs('about') ? 'active' : '' }}">
                      <a href="{{route('about')}}">about</a>
                      
                    </li>
                    <li class="{{request()->routeIs('training') ? 'active' : '' }}">
                      <a href="{{route('training')}}">Training</a>
                      
                    </li>
                    <li class="{{request()->routeIs('contact') ? 'active' : '' }}">
                      <a href="{{route('contact')}}">Contacts</a>
                      
                    </li>
                    @if (!Auth::guest())
                        <li class="{{request()->routeIs('account') ? 'active' : '' }}">
                      <a href="{{route('account')}}">My Account</a></li>
                    @else
                        <li class="{{request()->routeIs('registration') ? 'active' : '' }}">
                      <a href="{{route('registration')}}">Registration</a></li>
                      <li class="{{request()->routeIs('signin') ? 'active' : '' }}">
                      <a href="{{route('signin')}}">Sign In</a></li>
                    @endif
                    
                      
                    
                  </ul>
                </nav>
                <!-- eof main nav -->
              </div>

            </div>
          </div>
        </div>

        <!-- header toggler -->

        <span class="toggle_menu">
          <span></span>
        </span>

      </header>