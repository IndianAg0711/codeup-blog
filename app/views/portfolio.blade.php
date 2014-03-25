@extends ('layouts.master')

@section('content')
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12"><h1>Portfolio</h1></div>
    </div>
    <hr>
    
    <div class="media">
      <a class="pull-left" href="">
        <img class="media-object" src="http://placehold.it/700x300">
      </a>
      <div class="media-body">
      <h4 class="media-heading">Main Project</h4>
      </div>
    </div>

    <hr>

    <!-- Contact row -->
    <div class="row">
      <div class="col-md-3"><p class="text-center">CONTACT</p></div>
      <div class="col-md-6">
        <p>Joseph Villafranca</p>
        <p>joseph.villafranca@gmail.com</p>
      </div>
      <div class="col-md-3">.col-md-4</div>
    </div>

    <hr>

    <!-- Work Experience row -->
    <div class="row">
      <div class="col-md-3"><p class="text-center">WORK EXPERIENCE</p></div>
      <div class="col-md-6">
        <p>Joseph Villafranca</p>
        <p>joseph.villafranca@gmail.com</p>
      </div>
      <div class="col-md-3">.col-md-4</div>
    </div>

    <hr>

    <!-- Education row -->
    <div class="row">
      <div class="col-md-3"><p class="text-center">EDUCATION</p></div>
      <div class="col-md-6">
        <p><strong>LAMP+J Software Development Bootcamp</strong></p>
        <p></p>
      </div>
      <div class="col-md-3">.col-md-4</div>
    </div>
  </div>
@stop