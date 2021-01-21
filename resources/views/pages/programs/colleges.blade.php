@extends('layouts.main-app')

@section('content')

<!-- Main Start -->
@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<section class="students-site">
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 site-title wow animate__animated animate__backInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
        <div class="studyDreamSchoolBack">
        <h2 class="studyDreamSchooltittle">Apply to Study Abroad 
            <br> at Your Dream School</h2>
        <p class="studyDreamSchooltext">Learn about programs and schools, get <br>
            matched to the best options for you, easily <br>
            submit your application, and get the support <br>
            you need along the way!
            </p>
        <div class="main-button">    
        <button type="button" class="btn button studyDreamSchoolbtn">
              Get Started
            </button>
        </div>
        </div>
        </div>
        </div>
      </div>
    </section>
<!-- Main End -->
<div class="container">
    <div class="row">
      @foreach ($collegePrograms as $collegeProgram)
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $collegeProgram->title }}</h5>
              <p class="card-text">{{ $collegeProgram->description }}</p>
              <form method="post" action="{{ route('college.program.apply') }}">
                @csrf
                <input name="college" type="text" value="{{ $collegeProgram->id }}" hidden>
                <button type="submit" class="btn btn-primary">Apply</button>
              </form>
              
            </div>
          </div>
        </div>
      @endforeach    
    </div>
</div>

@endsection