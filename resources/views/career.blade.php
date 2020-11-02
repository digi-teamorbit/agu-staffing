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
              <h1 class="">{{$cms_career->name}}</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home')}}">Home</a>
                </li>

                <li class="breadcrumb-item active">
                  {{$cms_career->name}}
                </li>
              </ol>
            </div>

            <div class="divider-50"></div>

          </div>
        </div>
      </section>

      <section class="pt-20 pb-10 s-py-lg-130 main_contact_form career_contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 contact-header heading text-center">
              <h5>
                {{$cms_career2->name}}
              </h5>
              <h4>
                <?= html_entity_decode($cms_career2->content) ?>
              </h4>
            </div>
            <div class="px-30 ds-form">
              <form onsubmit="return Validate(this);" class="ds contact-form c-mb-20" method="post" action="{{route('careerSubmit')}}" enctype="multipart/form-data">
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
                      <input type="text" aria-required="true" size="200" value="" name="phone" id="phone" class="form-control @error('phone') is-danger @enderror" placeholder="Phone number" required="">
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
                      <input type="text" aria-required="true" size="200" value="" name="job_sector" id="job_sector" class="form-control @error('job_sector') is-danger @enderror" placeholder="Job sector" required="">
                      @error('job_sector')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('job_sector') }}</p>
                      @enderror
                    </div>
                    <div class="col-c-mb-60 form-group">
                      <input type="file" name="resume" id="resume" class="form-control @error('resume') is-danger @enderror" style="color: grey; " required="">
                      @error('resume')
                      <p class="help is-danger" style="color: red;">{{ $errors->first('resume') }}</p>
                      @enderror
                      <!-- <input type="file" class="custom-file-input button" name="resume" id="validatedCustomFile"> -->
                      <!-- <label class="custom-file-label" for="validatedCustomFile">Attach CV</label> -->
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                      <label for="message">Comment</label>
                      <textarea aria-required="true" rows="6" cols="40" name="comment" id="comment" class="form-control @error('comment') is-danger @enderror" placeholder="comment" required=""></textarea>
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

<script>
  var _validFileExtensions = [".pdf", ".doc", ".docx"];   
function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Invalid File Type! Please Upload in either " + _validFileExtensions.join(", or ") + " Format.");
                    return false;
                }
            }
        }
    }
  
    return true;
}
  
  </script>

@endsection