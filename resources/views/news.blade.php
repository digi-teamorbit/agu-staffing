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
              <h1 class="">{{$blog->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$blog->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


      <section class="ls s-py-50 c-gutter-60">
        <div class="container">
          <div class="row">

            <div class="d-none d-lg-block divider-110"></div>

            <main class="col-lg-7 col-xl-8 order-lg-2">
              <article class="vertical-item post type-post status-publish format-standard has-post-thumbnail box">

                <!-- .post-thumbnail -->
                <div class="item-media post-thumbnail">
                  <div class="embed-responsive embed-responsive-3by2">
                    
                      <img src="{{asset($blog->image)}}" alt="">
                    
                  </div>
                </div>


                <div class="item-content">
                  <div class="entry-content">

                <?= html_entity_decode($blog->detail) ?>
                  
                    <!-- <p>
                      In this blog series titled ‘Franki goes to…’ we follow her travels around the world…
                    </p>

                    <p>
                      Short ribs fatback ball tip landjaeger burgdoggen pork chop shank strip steak alcatra frankfurter. Leberkas salami ribeye capicola. Turducken bresaola pork shankle tongue ball tip sausage picanha pig biltong jowl meatball kielbasa t-bone. Ball tip ham
                      corned beef prosciutto hamburger shoulder.
                    </p>

                    <blockquote class="divider-0 text-center">
                      <p>
                        Working with HR Invenir has already allowed us to challenge some existing assumptions internally, right from the first data collection. The dashboards have been able.
                      </p>
                      <span>
                        Daniel
                        <br>
                        <strong>Craigs</strong>
                      </span>
                    </blockquote> -->

                    <!-- <p>
                      Jowl tongue andouille fatback. Pork chop tri-tip ground round burgdoggen, short ribs pig spare ribs cupim tongue. Corned beef picanha filet mignon pastrami, cupim leberkas boudin. Leberkas boudin pastrami.
                    </p>

                    <ul class="list1">
                      <li>
                        <i class="color-main fa fa-check"></i>
                        Meatball biltong pork belly
                      </li>
                      <li>
                        <i class="color-main fa fa-check"></i>
                        Corned beef pig turkey pastrami
                      </li>
                      <li>
                        <i class="color-main fa fa-check"></i>
                        Chuck doner ham salami pork
                      </li>
                    </ul>

                    <p>
                      <img class="alignleft" alt="" src="images/side-image.jpg">
                    </p>


                    <p class="right">
                      Doner biltong bresaola tenderloin, andouille chicken cow. Turkey short ribs pancetta, alcatra biltong pork loin sirloin beef.
                    </p>

                    <p>
                      Ham hock tail tongue drumstick brisket burgdoggen shoulder. Meatball tongue filet mignon venison. Cupim pig bresaola ball tip drumstick.
                    </p>

                    <p>
                      ail short loin ham pastrami hamburger tongue meatloaf andouille t-bone shankle. Ground round ham jerky pork flank turkey ball tip porchetta t-bone. Short ribs pancetta kielbasa pig bresaola.
                    </p>
                    <p>
                      Hamburger shoulder pancetta ground round, drumstick meatball beef flank spare ribs biltong sausage porchetta short ribs landjaeger. Pork chop beef picanha, turkey brisket pork chuck turducken.
                    </p>
 -->
                  </div>
                  <!-- .entry-content -->
                  <footer class="entry-footer">
                    <i class="color-main fa fa-user "></i>
                    <a href="blog-single-right.html">
                      Admin
                    </a>
                    <i class="color-main fa fa-calendar"></i>
                    <a href="blog-single-right.html">
                      {{date_format(date_create($blog->updated_at),"F d, Y")}}
                    </a>
                    <i class="color-main fa fa-tag"></i>
                    <a href="blog-single-right.html">
                      News
                    </a>
                  </footer>
                  <!-- .entry-footer -->

                </div>
                <!-- .item-content -->
              </article>

              


              
              

              <nav class="navigation post-nav" role="navigation">
                <h2 class="screen-reader-text">Post navigation</h2>
                <div class="nav-links">
                  @if($prev->id=="")
                  <div class="nav-previous cover-image s-overlay ds">
                    <div class="post-nav-image">
                      <img src="" alt="">
                    </div>

                    <div class="post-nav-text-wrap">
                      <span>
                        Prev
                      </span>
                      <h4>
                        
                      </h4>
                    </div>
                    <a href="javascript:void(0)" rel="prev"></a>
                  </div>
                  @else
                  <div class="nav-previous cover-image s-overlay ds">
                    <div class="post-nav-image">
                      <img src="{{asset($prev->image)}}" alt="">
                    </div>

                    <div class="post-nav-text-wrap">
                      <span>
                        Prev
                      </span>
                      <h4>
                        {{$prev->name}}
                      </h4>
                    </div>
                    <a href="{{route('news', $prev->id)}}" rel="prev"></a>
                  </div>
                  @endif
                  
                  @if($next->id=="")
                  <div class="nav-previous next cover-image s-overlay ds">
                    <div class="post-nav-image">
                      <img src="" alt="">
                    </div>

                    <div class="post-nav-text-wrap next">
                      <span class="d-md-flex justify-content-md-end justify-content-lg-center">
                        next
                      </span>
                      <h4>
                        
                      </h4>
                    </div>
                    <a href="javascript:void(0)" rel="prev"></a>
                  </div>
                  @else
                  <div class="nav-previous next cover-image s-overlay ds">
                    <div class="post-nav-image">
                      <img src="{{asset($next->image)}}" alt="">
                    </div>

                    <div class="post-nav-text-wrap next">
                      <span class="d-md-flex justify-content-md-end justify-content-lg-center">
                        next
                      </span>
                      <h4>
                        {{$next->name}}
                      </h4>
                    </div>
                    <a href="{{route('news', $next->id)}}" rel="prev"></a>
                  </div>
                  @endif
                  
                </div>
              </nav>

            </main>

            <aside class="col-lg-5 col-xl-4 order-lg-1">

              


              <div class="widget widget_recent_posts mt-50">
                <h3>
                  Recent Posts
                </h3>
                <ul class="media-list darklinks">
                  @foreach ($recent_posts as $post)
                  <li class="media">
                    <a class="media-left" href="{{route('news', $post->id)}}">
                      <img src="{{asset($post->image)}}" alt="">
                    </a>
                    <div class="media-body">
                      <h4>
                        <a href="{{route('news', $post->id)}}">{{$post->name}}</a>
                      </h4>
                      <p>
                        <i class=" color-main fa fa-calendar"></i>
                        {{date_format(date_create($post->updated_at),"F d, Y")}}
                      </p>
                    </div>
                  </li>
                  @endforeach

                  <!-- <li class="media">
                    <a class="media-left" href="#">
                      <img src="{{asset('images/widget_01.jpg')}}" alt="">
                    </a>
                    <div class="media-body">
                      <h4>
                        <a href="#">Franki goes to… The Philippines & Indonesia</a>
                      </h4>
                      <p>
                        <i class=" color-main fa fa-calendar"></i>
                        August 7, 2017
                      </p>
                    </div>
                  </li> -->

                  <!-- <li class="media">
                    <a class="media-left" href="#">
                      <img src="{{asset('images/widget_03.jpg')}}" alt="">
                    </a>
                    <div class="media-body">
                      <h4>
                        <a href="#">Getting More For Your Money</a>
                      </h4>
                      <p>
                        <i class=" color-main fa fa-calendar"></i>
                        August 6, 2017
                      </p>
                    </div>
                  </li> -->
                </ul>
              </div>

              


            </aside>

            <div class="d-none d-lg-block divider-110"></div>
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