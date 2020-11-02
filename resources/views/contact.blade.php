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
              <h1 class="">{{$cms_contact->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_contact->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>



      <section class="contact_page_form">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="form_start">
                <h2>CONTACTS</h2>

                <br>
                <form method="post" action="{{route('contactUsSubmit')}}">
                  @csrf

                <label>Subject*</label>
                <input type="text" name="subject" class="@error('subject') is-danger @enderror" required="">
                  @error('subject')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('subject') }}</p>
                  @enderror

                <label>Contact Name*</label>
                <input type="text" name="name" class="@error('name') is-danger @enderror" required="">
                @error('name')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                  @enderror

                <label>Company*</label>
                <input type="text" name="company" class="@error('company') is-danger @enderror" required="">
                @error('company')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('company') }}</p>
                  @enderror

                <label>Phone*</label>
                <input type="text" name="phone" class="@error('phone') is-danger @enderror" required="">
                @error('phone')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('phone') }}</p>
                  @enderror

                <label>Email*</label>
                <input type="text" name="email" class="@error('email') is-danger @enderror" required="">
                @error('email')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
                  @enderror

                <label>Message*</label>
                <textarea rows="5" name="message" class="@error('message') is-danger @enderror" required=""></textarea>
                @error('message')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
                  @enderror

                <label for="respond">Respond By*</label>
                <select name="respond" class="@error('respond') is-danger @enderror" required="">
                  <option selected="" disabled="">SELECT</option>
                  <option>ONE</option>
                  <option>TWO</option>
                </select>
                @error('respond')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('respond') }}</p>
                  @enderror

                <label>Best Time to Respond</label>
                <input type="text" name="time" class="@error('time') is-danger @enderror" required="">
                @error('time')
                  <p class="help is-danger" style="color: red;">{{ $errors->first('time') }}</p>
                  @enderror

                <button type="submit"> SEND</button>
                </form>
              </div>
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