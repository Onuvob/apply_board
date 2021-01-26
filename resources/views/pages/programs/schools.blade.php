@extends('layouts.main-app')

@section('content')

<!-- Main Start -->


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
      
      @foreach ($schoolPrograms as $schoolProgram)
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $schoolProgram->title }}</h5>
              <p class="card-text">{{ $schoolProgram->description }}</p>
              @auth
              <form method="post" action="{{ route('school.program.apply') }}">
                @csrf
                <input name="school" type="text" value="{{ $schoolProgram->id }}" hidden>
                <button type="submit" class="btn btn-primary">Apply</button>
              </form>
              
              @endauth
              @guest
                <a href="{{ route('login') }}" class="text-decoration-none btn btn-primary">Login in to Apply</a>
              @endguest
              
            </div>
          </div>
        </div>
      @endforeach   
      @if( session('success') )

  <div class="row">

      <div class="mx-auto col-sm-8 alert alert-success">
          {{ session('success')}}
      </div>
      
  </div>


@endif


@if( session('error') )

<div class="row">

    <div class="mx-auto col-sm-8 alert alert-danger">
        {{ session('error')}}
    </div>
    
</div>


@endif
  

    </div>
</div>

@endsection