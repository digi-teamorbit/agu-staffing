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
              <h1 class="">{{$cms_train->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_train->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>


      

      <section class="training_videos">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="training_videos_heading text-center">
                <h2>{{$cms_training->name}}</h2>
              </div>
            </div>
            @foreach ($videos as $video)
            <div class="col-sm-4">
              <div class="training_vid">
                
                <iframe src="{{$video->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            @endforeach
            <!-- <div class="col-sm-4">
              <div class="training_vid">
                <iframe src="https://www.youtube.com/embed/vGR8q8yUtMk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div> -->
            <!-- <div class="col-sm-4">
              <div class="training_vid">
                <iframe src="https://www.youtube.com/embed/pbG0JGY2U00" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

</style>
@endsection

@section('js')
<script type="text/javascript"></script>

@endsection