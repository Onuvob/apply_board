@extends('layouts.main-app')

@section('content')
    <!-- main -->
<main class="site-main">
  <section class="main-banner">
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12 site-title wow animate__animated animate__backInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
        <h2 class="main-text ">We're on a Mission to <br> Educate the World</h2>
        <p class="main-para">ApplyBoard connects international students and recruitment partners to educational opportunities at institutions around the world</p>
        <div class="main-button">    
        <button type="button" class="btn button">
              How it Works
            </button>
        </div>
        </div>
      <div class="col-lg-6 col-md-12">
        <div class="banner-image wow animate__animated animate__backInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
        <img src="{{ asset('img/banner.png') }}" alt="Banner img">
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
<!-- Main Ends -->
<!-- About -->

<section class="testimonials" id="Services">
  <div class="container-fluid">
      <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="profile wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
          <img src="{{ asset('img/graduted.png') }}" class="user">
          <h3>Students</h3> 
          <p>
            Get matched and apply to programs and schools that align with your background, skills, and interests.
          </p>
          <div class="main-button2">    
            <button type="button" class="btn button">
                  Get Started
                </button>
            </div>
        </div>
      </div>
  
      <div class="col-md-4 text-center">
        <div class="profile">
          <img src="{{ asset('img/school.png') }}" class="user">
          <h3>Partner School</h3>
          <p>
            Diversify your campus by attracting qualified students from counteries around the <br> world.
          </p>
          <div class="main-button2">    
            <button type="button" class="btn button">
                  Learn How
                </button>
            </div>
        </div>
      </div>
  
      <div class="col-md-4 text-center">
        <div class="profile wow animate__animated animate__backInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
          <img src="{{ asset('img/web.png') }}" class="user">
          <h3>Recruitment Partners</h3>
          <p>
            Give your students the best chance for success with access to 1,200+ educational <br> institutions.
          </p>
          <div class="main-button2">    
            <button type="button" class="btn button">
                Work With Us
                </button>
            </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<!-- About Ends -->

<!-- Student Application -->

<section class="application-area" id="Blog">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="application-img">
      <img src="{{ asset('img/image1.jpg') }}" alt="image1" class="wow slideInLeft">
      </div>
      </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="application">
            <img src="{{ asset('img/shape2.png') }}" alt="" class="w-100">
          <h2 class="application-title">Simplify the Student Application</h2>
          <p class="application-pera">Using the ApplyBoard Platform, students and recruitment partners can easily search and apply to 1,200+ educational institutions and 30,000+ programs.</p>
        </div>
        </div>
      </div>
    </div>
</section>   
                                       
<!-- Student Application Ends -->

<!-- Students Dream -->
<section class="dream-area " id="About">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
        <h5 class="dream-title-body">STUDENTS</h5>
        <h2 class="sub-title">Persue Your Dream of Studying Abroad</h2>
        <p class="scholar-pera">Discover opportunities around the world. Get matched ad apply to programs at educational institutions that meet your needs, and start your abroad journey!</p>
        <div class="dream-main-button">
        <button type="button" class="btn button">
          Get Started Now
        </button>
      </div> 
      </div>
      </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
          <img src="{{ asset('img/image2.jpg') }}" alt="image2">
          </div>       
          </div>
        </div>
      </div>
</section>   

<!-- Students Dream Ends -->

<!-- Partner school -->

<section class="partner-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="application-img wow animate__animated animate__zoomIn" data-wow-duration="1.5s" data-wow-delay=".5s">
        <img src="{{ asset('img/image3.png') }}" alt="image3">
        </div>
      </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="partner-application wow animate__animated animate__zoomIn" data-wow-duration="1.5s" data-wow-delay=".5s">
          <h5 class="partner-title-body">PARTNER SCHOOLS</h5>
          <h4 class="sub-title">Reach Diverse and Qualified Students</h4>
          <p class="scholar-pera">The ApplyBoard Platform allows you to enrich and diversify your campus by connecting you with highly qualified students from around the globe.</p>
          <div class="partner-main-button">
          <button type="button" class="btn button">
            Learn How
            </button>
            </div>
         </div>
        </div>
        </div>
      </div>
</section>            

<!-- Partner school Ends -->
<!-- Recruitment partners -->

<section class="recruitment-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="recruitment-application wow animate__animated animate__rotateInUpLeft" data-wow-duration="1.5s" data-wow-delay=".5s">
        <h5 class="title-body">RECRUITMENT PARTNERS</h5>
        <h4 class="sub-title">Further Your Students Educational Success</h4>
        <p class="scholar-pera">Provide your students with an exceptional applicaiton experience at 12,000+ educational institutions, while reducing your cost and improving effeciency.</p>
        <div class="recruitment-main-button">
        <button type="button" class="btn button">
          Work With Us
          </button>
        </div>
        </div>
       </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="application-img wow animate__animated animate__rotateInUpRight" data-wow-duration="1.5s" data-wow-delay=".5s">
        <img src="{{ asset('img/image4.jpg') }}" alt="image4">
        </div>
      </div>
        </div>
      </div>
    </div>
</section>     

<!-- Recruitment partners End -->


            <!-- Brand Area -->
<section class="brand-area wow animate__animated animate__heartBeat" data-wow-duration="2s" data-wow-delay=".5s">
  <div class="container-fluid">
    <h2 class="brand-title">Access to More Opportunities</h2>
    <h4 class="brand-para">ApplyBoard has built partnerships with 1,200+ colleges, universities, primary, and secondary schools around the world.</h4>
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo1.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo2.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo3.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo4.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo5.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo6.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo7.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo8.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo9.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo10.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo11.png') }}" alt="logo1">
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-brand">
            <img src="{{ asset('img/logo12.png') }}" alt="logo1">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            
<!-- Brand Area End -->

<!-- Scholarship Awarded --> 

 <section class="scholar-area">
<div class="container-fluid">
<div class="row">
 <h1 class="scholar-title wow animate__animated animate__rubberBand" data-wow-duration="2s" data-wow-delay="2s">$30 Million Dollars in scholarships Awarded</h1>
    <div class="col-lg-6 col-md-12">
      <div class="application-img wow animate__animated animate__backInRight" data-wow-duration="2s" data-wow-delay=".5s">
       <img src="{{ asset('img/image5.jpg') }}" alt="scholarimage">
       </div>
        </div>
         <div class="col-lg-6 col-md-12 wow animate__animated animate__backInLeft" data-wow-duration="2s" data-wow-delay=".5s">
        <p class="scholar-para">ApplyBoard assists students from the world with their application to abroad. Through exclusive school partnerships, ApplyBoard students have secured over $30,000,000 in Scholarship.</p>
       <div class="main-button">
        <button type="button" class="btn button main-button">
           About ApplyBoard
           </button>
           </div>
      </div>
      </div>
     </div>
     </section>   
<!-- Scholarship Awarded End -->

<!-- GET STARTED WITH APPLY BOARD -->
<section class="get-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="get-application">
       <h5 class="get-title wow animate__animated animate__tada" data-wow-duration="2s" data-wow-delay=".5s">Get Started With ApplyBoard</h5>
      </div>  
      </div>
      </div>
    </div>
</section>  
<!-- GET STARTED End -->
@endsection
