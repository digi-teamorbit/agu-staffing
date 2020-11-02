<?php $cms=DB::table('pages')->where('id',5)->first(); ?>

<footer class="page_footer ds s-py-sm-20 s-pt-md-75 s-pb-md-50 s-py-lg-130 c-gutter-60 pb-20 half-section">
        <div class="container">
          <div class="row">
            <div class="footer col-md-4 text-center animate" data-animation="fadeInUp">
              <div class="footer widget text-center">
                <h3 class="widget-title title-menu">Explore</h3>
                <ul class="footer-menu">
                  <li>
                    <a href="{{route('home')}}">Home</a>
                  </li>
                  <li class="menu1">
                    <a href="{{route('job_seek')}}">Job Seekers</a>
                  </li>
                  <li>
                    <a href="{{route('employers_resourses')}}">Employers Resources</a>
                  </li>
                  <li class="menu1">
                    <a href="{{route('drug')}}">Drug And Alcohol Policy</a>
                  </li>
                  <li>
                    <a href="{{route('about')}}">About</a>
                  </li>
                  <li class="menu1">
                    <a href="{{route('training')}}">Training</a>
                  </li>
                  <li class="border-bottom-0">
                    <a href="{{route('contact')}}">Contact</a>
                  </li>
                  <li class="menu1 border-bottom-0">
                    <a href="{{route('registration')}}">Registration</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer  col-md-4 text-center animate" data-animation="fadeInUp">
              <div class="text-center">
                <div class="header_logo_center footer-logo-ds">
                  <a href="{{route('home')}}" class="logo">
                    
                    <img src="{{asset($logo2->img_path)}}" alt="">
                    
                  </a>
                </div>
                <!-- eof .header_left_logo -->
              </div>
              <div class="widget pt-20">
                <?= html_entity_decode($cms->content) ?>
              </div>
              <div class="widget">
                <div class="media">
                  <i class="mx-10 color-main fa fa-map-marker"></i>
                   {{App\Http\Traits\HelperTrait::returnFlag(519) }}
                </div>

                <div class="media">
                  <i class="mx-10 color-main fa fa-phone"></i>
                  {{App\Http\Traits\HelperTrait::returnFlag(59) }}
                </div>

                <div class="media text-center link">
                  <i class="mx-10 text-center color-main fa fa-envelope"></i>
                  <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
                </div>
              </div>

              <div class="author-social">
                <a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" class="fa fa-facebook color-bg-icon rounded-icon" target="_blank"></a>
                <a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" class="fa fa-twitter color-bg-icon rounded-icon" target="_blank"></a>
                <a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}" class="fa fa-google color-bg-icon rounded-icon" target="_blank"></a>
              </div>
            </div>
            <div class="footer col-md-4 text-center animate" data-animation="fadeInUp">
              <div class="widget widget_mailchimp">

                <h3 class="widget-title">Newsletter</h3>

                <p>
                  Your Email <!-- (required) -->
                </p>

                <form method="post" action="{{route('newsletterSubmit')}}" class="signup">
                  @csrf
                  <label for="mailchimp_email">
                    <span class="screen-reader-text">Subscribe:</span>
                  </label>

                  <input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email @error('email') is-danger @enderror" placeholder="Email Address" required="">
                  @error('email')
                          <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                  @enderror

                  <button type="submit" class="search-submit">Send</button>

                </form>

              </div>
            </div>
          </div>
        </div>
      </footer>

      <section class="page_copyright ds s-py-30 ">
        <div class="container">
          <div class="row align-items-center">
            <div class="divider-20 d-none d-lg-block"></div>
            <div class="col-md-12 text-center">
              <p>&copy; Copyright
                <span class="copyright_year">2020</span> All Rights Reserved</p>
            </div>
            <div class="divider-20 d-none d-lg-block"></div>
          </div>
        </div>
      </section>