@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

      <section class="page_slider">
        <div class=" flexslider" data-nav="true" data-dots="false">
          <ul class="slides">
            <li class="ds text-center">
              <img src="{{asset($banner1->image)}}" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="intro_layers_wrapper">
                      <div class="intro_layers">
                        <div class="intro_layer" data-animation="fadeInLeft">
                          <h3 class="intro_before_featured_word">
                            {{$banner1->title}}
                          </h3>
                        </div>
                        <div class="intro_layer" data-animation="fadeInRight">
                          <?= html_entity_decode($banner1->description) ?>
                        </div>
                        <div class="intro_layer" data-animation="fadeIn">
                          <div class="d-inline-block">
                            <a href="{{route('contact')}}" type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn">Contact Us</a>
                          </div>
                        </div>
                      </div>
                      <!-- eof .intro_layers -->
                    </div>
                    <!-- eof .intro_layers_wrapper -->
                  </div>
                  <!-- eof .col-* -->
                </div>
                <!-- eof .row -->
              </div>
              <!-- eof .container -->
            </li>
            <li class="ds text-center">
              <img src="{{asset($banner2->image)}}" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="intro_layers_wrapper">
                      <div class="intro_layers">
                        <div class="intro_layer" data-animation="pullUp">
                          <h3 class="intro_before_featured_word">
                            {{$banner2->title}}
                          </h3>
                        </div>
                        <div class="intro_layer" data-animation="pullDown">
                          <?= html_entity_decode($banner2->description) ?>
                        </div>
                        <div class="intro_layer" data-animation="fadeIn">
                          <div class="d-inline-block">
                            <a href="{{route('contact')}}" type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn">Contact Us</a>
                          </div>
                        </div>
                      </div>
                      <!-- eof .intro_layers -->
                    </div>
                    <!-- eof .intro_layers_wrapper -->
                  </div>
                  <!-- eof .col-* -->
                </div>
                <!-- eof .row -->
              </div>
              <!-- eof .container -->
            </li>
            <li class="ds text-center">
              <img src="{{asset($banner3->image)}}" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="intro_layers_wrapper">
                      <div class="intro_layers">
                        <div class="intro_layer" data-animation="pullDown">
                          <h3 class="intro_before_featured_word">
                            {{$banner3->title}}
                          </h3>
                        </div>
                        <div class="intro_layer" data-animation="pullUp">
                          <h2 class="text-uppercase intro_featured_word">
                            <?= html_entity_decode($banner3->description) ?>
                          </h2>
                        </div>
                        <div class="intro_layer" data-animation="fadeIn">
                          <div class="d-inline-block">
                            <a href="{{route('contact')}}" type="button" class="btn btn-outline-maincolor center-block">Contact Us</a>
                          </div>
                        </div>
                      </div>
                      <!-- eof .intro_layers -->
                    </div>
                    <!-- eof .intro_layers_wrapper -->
                  </div>
                  <!-- eof .col-* -->
                </div>
                <!-- eof .row -->
              </div>
              <!-- eof .container -->
            </li>
          </ul>
          <ul class="flex-direction-nav">
            <li class="flex-nav-prev">
              <a class="flex-prev" href="#">&gt;</a>
            </li>
            <li class="flex-nav-next">
              <a class="flex-next" href="#">&lt;</a>
            </li>
          </ul>
        </div>
        <!-- eof flexslider -->
      </section>


      <section class="ds slider-bottomline d-none d-xl-block py-50">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="info-block">
                <p>
                  Call Us 24/7
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(59) }}
                </h3>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="info-block">
                <p>
                  Email Address
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(218) }}
                </h3>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="info-block">
                <p>
                  Open Hours
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(1965) }}
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ls about s-pt-25">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
              <div class="heading-about home_about">
                <h2>
                  {{$cms_home1->name}}


                </h2>
                <?= html_entity_decode($cms_home1->content) ?>
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
              <img src="{{asset($cms_home1->image)}}" alt="person01.png">
            </div>
          </div>
        </div>
      </section>

      @include('widgets.recruitment')

      <section class="pt-20 pb-10 s-py-lg-130 main_contact_form" style="
    background: url({{asset($cms_home3->image)}});">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 contact-header heading text-center">
              <h5>
                {{$cms_home3->name}}
              </h5>
              <h4>
                <?= html_entity_decode($cms_home3->content) ?>
              </h4>
            </div>
            <div class="px-30 ds-form">
              <form class="ds contact-form c-mb-20" method="post" action="{{route('careerSubmit')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="col-c-mb-60 form-group has-placeholder">
                      <label for="name">Full Name
                        <span class="required">*</span>
                      </label>
                      <input type="text" aria-required="true" size="200" value="" name="name" id="name" class="form-control @error('name') is-danger @enderror" placeholder="Full Name" required="">
                      @error('name')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                      @enderror
                    </div>
                    <div class="col-c-mb-60 form-group has-placeholder">
                      <label for="text">Phone number
                        <span class="required">*</span>
                      </label>
                      <input type="text" aria-required="true" size="200" value="" name="phone" id="text" class="form-control @error('phone') is-danger @enderror" placeholder="Phone number" required="">
                      @error('phone')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                      @enderror
                    </div>
                    <div class="col-c-mb-60 form-group has-placeholder">
                      <label for="email">Email address
                        <span class="required">*</span>
                      </label>
                      <input type="email" aria-required="true" size="200" value="" name="email" id="email" class="form-control @error('email') is-danger @enderror" placeholder="Email address" required="">
                      @error('email')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                      @enderror
                    </div>
                    <div class="col-c-mb-60 form-group has-placeholder">
                      <label for="text">Job sector
                        <span class="required">*</span>
                      </label>
                      <input type="text" aria-required="true" size="200" value="" name="job_sector" id="text" class="form-control @error('job_sector') is-danger @enderror" placeholder="Job sector" required="">
                      @error('job_sector')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('job_sector') }}</p>
                      @enderror
                    </div>
                    <div class="col-c-mb-60 form-group">
                      <input type="file" class="custom-file-input button @error('resume') is-danger @enderror" id="validatedCustomFile" name="resume" required="">
                      @error('resume')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('resume') }}</p>
                      @enderror
                      <label class="custom-file-label" for="validatedCustomFile">Attach CV</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                      <label for="message">Comment</label>
                      <textarea aria-required="true" rows="6" cols="40" name="comment" id="message" class="form-control @error('comment') is-danger @enderror" placeholder="comment" required=""></textarea>
                      @error('comment')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('comment') }}</p>
                      @enderror

                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group text-center">
                    <button type="submit" id="contact_form_submit" name="contact_submit" class="button">Submit CV</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="ls s-py-lg-130 s-pt-30 s-pb-30 pt-20 main_blog">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-header text-center">
                <?= html_entity_decode($cms_home4->content) ?>
              </div>
              <div class="owl-carousel pt-30" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="false" data-dots="false">
                @foreach ($blogs as $blog)
                <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="{{route('news', $blog->id)}}">
                      <img src="{{asset($blog->image)}}" alt="">
                    </a>
                  </div>
                  <!-- .post-thumbnail -->
                  <div class="item-content ">
                    <header class="blog-header ">
                      <a href="{{route('news', $blog->id)}}" rel="bookmark">
                        <h4>
                          {{$blog->name}}
                        </h4>
                      </a>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content ls">
                      <p><?= html_entity_decode($blog->short_detail) ?></p>
                    </div>
                    <!-- .entry-content -->
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          {{date('d/m/Y', strtotime($blog->updated_at))}}
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- .item-content -->
                </article>
                @endforeach
           
                <!-- <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="">
                      <img src="{{asset('images/blog-1.jpg')}}" alt="">
                    </a>
                  </div>
             
                  <div class="item-content">
                    <header class="blog-header ">
                      <a href="" rel="bookmark">
                        <h4>
                          Franki goes to… The Philippines & Indonesia
                        </h4>
                      </a>
                    </header>
                
                    <div class="entry-content ls">
                      <p>In this blog series titled ‘Franki goes to…’ we follow her travels around the world…</p>
                    </div>
                 
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          August 7, 2017
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
              
                </article> -->
             
                <!-- <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="">
                      <img src="{{asset('images/blog-2.jpg')}}" alt="">
                    </a>
                  </div>
             
                  <div class="item-content">
                    <header class="blog-header ">
                      <a href="" rel="bookmark">
                        <h4>
                          Getting More For Your Money
                        </h4>
                      </a>
                    </header>
          
                    <div class="entry-content ls">
                      <p>The majority of businesses will have a degree of reliance on recruitment suppliers…</p>
                    </div>
                 
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          August 6, 2017
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </article> -->
           
                <!-- <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="#">
                      <img src="{{asset('images/blog-3.jpg')}}" alt="">
                    </a>
                  </div>
           
                  <div class="item-content">
                    <header class="blog-header ">
                      <a href="#" rel="bookmark">
                        <h4>
                          Post With Youtube
                          <br> Video
                        </h4>
                      </a>
                    </header>
                   
                    <div class="entry-content ls">
                      <p>Ribeye cupim jerky ham. Fatback sausage shoulder, bresaola boudin hamburger pork turkey</p>
                    </div>
                
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          June 10, 2017
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
              
                </article> -->
             
                <!-- <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="#">
                      <img src="{{asset('images/blog-4.jpg')}}" alt="">
                    </a>
                  </div>
          
                  <div class="item-content">
                    <header class="blog-header ">
                      <a href="#" rel="bookmark">
                        <h4>
                          Post format:
                          <br> Image
                        </h4>
                      </a>
                    </header>
                    
                    <div class="entry-content ls">
                      <p>Beef beef ribs pancetta sirloin tail brisket strip steak chuck swine frankfurter ham hock kielbasa</p>
                    </div>
              
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          June 8, 2017
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
    
                </article> -->
             
             <!--    <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                  <div class="item-media post-thumbnail">
                    <a href="#">
                      <img src="{{asset('images/blog-1.jpg')}}" alt="">
                    </a>
                  </div>
             
                  <div class="item-content">
                    <header class="blog-header ">
                      <a href="#" rel="bookmark">
                        <h4>
                          Post With Carousel
                          <br>
                        </h4>
                      </a>
                    </header>
                
                    <div class="entry-content ls">
                      <p>Beef beef ribs pancetta sirloin tail brisket strip steak chuck swine frankfurter ham hock kielbasa </p>
                    </div>
                  
                    <div class="blog-item-icons">
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-user "></i>
                        <a href="#">
                          Admin
                        </a>
                      </div>
                      <div class="col-sm-4 ">
                        <i class="color-main fa fa-calendar"></i>
                        <a href="#">
                          june 7, 2017
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <i class="color-main fa fa-tag"></i>
                        <a href="#">
                          News
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </article> -->
                <!-- #post-## -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ds half-section collapse-section">
        <div class="row">
          <div class="col-lg-6">
            <div class="image_cover image_cover_left half-image" style="
    background: url({{asset($cms_home2->image)}}); background-position: 50% 50%;
    background-size: cover;">
            </div>
          </div>
          <div class="col-lg-6 collapse-table">
            <div class="contact-header collapse-header heading pt-30">
              <?= html_entity_decode($cms_home2->content) ?>
            </div>
            <div id="accordion01" role="tablist">
              @foreach ($job_offer as $key=>$value)
              <div class="card-header" role="tab" id="collapse01_header">
                <h5>
                  <a data-toggle="collapse" href="#collapse01{{$key}}" aria-expanded="true" aria-controls="collapse01{{$key}}">
                    {{$value->title}}
                  </a>
                </h5>
              </div>
              <div id="collapse01{{$key}}" class="collapse @if($key == 0) show @endif" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                <div class="card-body">
                  <?= html_entity_decode($value->description) ?>
                </div>
              </div>
              @endforeach
              <!-- <div class="card-header" role="tab" id="collapse02_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    Or take your time
                  </a>
                </h5>
              </div>
              <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                <div class="card-body">
                  This company is a recruitment agency. Desired applicants apply for open job positions to the company and we help connect the employees with our clients. Currently we service two companies providing courier drivers to them.
                </div>
              </div> -->
              <!-- <div class="card-header" role="tab" id="collapse03_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    Resign
                  </a>
                </h5>
              </div>
              <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                <div class="card-body">
                  This company is a recruitment agency. Desired applicants apply for open job positions to the company and we help connect the employees with our clients. Currently we service two companies providing courier drivers to them.
                </div>
              </div> -->


              <!-- <div class="card-header" role="tab" id="collapse04_header">
                <h5>
                  <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    Counter offers
                  </a>
                </h5>
              </div>
              <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                <div class="card-body">
                  This company is a recruitment agency. Desired applicants apply for open job positions to the company and we help connect the employees with our clients. Currently we service two companies providing courier drivers to them.
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>

      <section id="testimonials" class="s-pt-75 s-pb-50">
        <div class="container">
          <div class="row">
            <div class="divider-50 d-none d-lg-block"></div>

            <div class="col-md-12">

              <div class="testimonials-slider owl-carousel" data-autoplay="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true">
                @foreach ($testimonials as $test)
                <div class="quote-item">
                  <div class="quote-image">
                    <img src="{{asset($test->image)}}" alt="">
                  </div>
                  <p class="small-text color-darkgrey">
                  <!--   Jessica J.
                    <br> -->
                    <span>{{$test->name}}</span>
                  </p>
                  <p class="testimonials">
                    <em class="big text-muted">
                      <?= html_entity_decode($test->comments) ?>
                    </em>
                  </p>
                </div>
                @endforeach
                <!-- <div class="quote-item">
                  <div class="quote-image">
                    <img src="{{asset('images/team/testimonials_02.jpg')}}" alt="">
                  </div>
                  <p class="small-text color-darkgrey">
                    Michael J.
                    <span>Carter</span>
                  </p>
                  <p class="testimonials">
                    <em class="big text-muted">
                      That is always so powerful in evaluating performance and setting future direction. The data collection itself was straightforward, and Nicky and Jeremy have been a pleasure to work with
                    </em>
                  </p>
                </div> -->


                <!-- <div class="quote-item">
                  <div class="quote-image">
                    <img src="{{asset('images/team/testimonials_03.jpg')}}" alt="">
                  </div>
                  <p class="small-text color-darkgrey">
                    Sammy
                    <span>Winchell</span>
                  </p>
                  <p class="testimonials">
                    <em class="big text-muted">
                      Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                    </em>
                  </p>
                </div> -->

              </div>
              <!-- .testimonials-slider -->

            </div>

            <div class="divider-50 d-none d-lg-block"></div>
          </div>
        </div>
      </section>


      <section class="ds section_gradient gradient-background py-50">
        <div class="container">
          <div class="row">
            <div class="col-md-4 text-center animate" data-animation="pullUp">
              <div class="info-block">
                <p>
                  Call Us 24/7
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(59) }}
                </h3>
              </div>
            </div>
            <div class="col-md-4 text-center animate" data-animation="pullUp">
              <div class="info-block">
                <p>
                  Email Address
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(218) }}
                </h3>
              </div>
            </div>
            <div class="col-md-4 text-center animate" data-animation="pullUp">
              <div class="info-block">
                <p>
                  Open Hours
                </p>
                <h3>
                  {{App\Http\Traits\HelperTrait::returnFlag(1965) }}
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="us_map">
        <div class="container-fluid">
          <div class="row">
            <div class="home_map">
              <iframe src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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

<!-- Google Map Script -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?"></script>

@endsection