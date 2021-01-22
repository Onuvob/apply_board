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

<!-- study with applyboard start -->
<section class="testimonials" id="Services">
  <div class="container-fluid">
      <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 text-center">
        <div class="profile wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
        
          <h3>High School
          </h3> 
          <p class="Apara">
            High school typically includes 
            grade 9-12 and allows students 
            to develop skills to pursue 
            higher education.
            
                      </p>
          <div class="main-button2">    
            <a href="{{ route('school.programs') }}" class="text-decoration-none btn button">
              Explore High Schools
            </a>
            </div>
        </div>
      </div>
  
      <div class="col-md-4 text-center">
        <div class="profile">
         
          <h3>Undergraduate</h3>
          <p class="Apara">
            Undergraduate programs are 
            taught at colleges and 
            universities. Students receive a 
            diploma, an advanced diploma, 
            or a bachelor’s degree          </p>
          <div class="main-button2">    
            <a href="{{ route('college.programs') }}" class="text-decoration-none btn button">
              Undergraduate Programs 
            </a>
            </div>
        </div>
      </div>
  
      <div class="col-md-4 text-center">
        <div class="profile wow animate__animated animate__backInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
        
          <h3>Post-Graduate
          </h3>
          <p>
            A post-graduate program follows 
            an undergraduate degree and takes 1-2 years. Students receive 
            a graduate certificate, graduate 
            diploma, or master’s degree.          </p>
          <div class="main-button2">    
            <a href="{{ route('university.programs') }}" class="text-decoration-none btn button">
              Post-Graduate Programs
            </a>
            </div>
        </div>
      </div>
    </div>
    </div>
  </section>
<!-- study with applyboard  end -->
<!-- how it works find the right program and school start-->
<section class="dream-area findRightProgram">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">       
        <h2 class="sub-title">How It Works</h2>
        <h5 class="dream-title-body">Step 1</h5>
        <h2 class="sub-title">Find the Right Program and 
          School</h2>
        <p class="scholar-pera">Complete a short survey and get matched to 
          programs and schools that meet your unique 
          background and interests.</p>
     
      </div>
      </div>
        <div class="col-xl-6 col-lg-6 col-md-12">
          <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
          <img src="{{ asset('img/studyAbroadDreamSchool/sending_emails.png') }}" alt="image2">
          </div>       
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">       
            <div class="col-xl-6 col-lg-6 col-md-12">
              <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
              <img src="{{ asset('img/studyAbroadDreamSchool/click_here.png') }}" alt="image2">
              </div>       
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">               
                <h5 class="dream-title-body">Step 2</h5>
                <h2 class="sub-title">Submit Your Application</h2>
                <p class="scholar-pera">Select your program and school, complete your 
                  online profile, pay the application fee, and submit 
                  the required documents. ApplyBoard will review 
                  your application and ensure you’re not missing 
                  any information.</p>           
              </div>
              </div>
            </div>
          </div>

         
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                  <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">                  
                  <h5 class="dream-title-body">Step 3</h5>
                  <h2 class="sub-title">Get Your Letter of Acceptance</h2>
                  <p class="scholar-pera">Complete a short survey and get matched to 
                    programs and schools that meet your unique 
                    background and interests.</p>
               
                </div>
                </div>
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <img src="{{ asset('img/studyAbroadDreamSchool/new_message (1).png') }}" alt="image2">
                    </div>       
                    </div>
                  </div>
                </div>


                <div class="container-fluid">
                  <div class="row">       
                      <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <img src="{{ asset('img/studyAbroadDreamSchool/visa.png') }}" alt="image2">
                        </div>       
                        </div>
          
                        <div class="col-xl-6 col-lg-6 col-md-12">
                          <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">               
                          <h5 class="dream-title-body">Step 4</h5>
                          <h2 class="sub-title">Start the Visa Process
                          </h2>
                          <p class="scholar-pera">ApplyBoard’s team of experts provide you with 
                            guidance and support during the visa application 
                            process and beyond, to give you the best chance 
                            of success.</p>           
                        </div>
                        </div>
                      </div>
                    </div>
                    
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="dream-application wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">                  
                            <h5 class="dream-title-body">Step 5</h5>
                            <h2 class="sub-title">Book Your Plane Ticket and Go!</h2>
                            <p class="scholar-pera">Once you’ve got your acceptance and visa, 
                              book your plane ticket and begin your 
                              educational journey abroad! Don’t 
                              forget to arrange your 
                              accommodations.</p>
                         
                          </div>
                          </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                              <div class="application-img wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">
                              <img src="{{ asset('img/studyAbroadDreamSchool/traveling.png') }}" alt="image2">
                              </div>       
                              </div>
                            </div>
                          </div>


</section>   

<!-- how it works find the right program and school end-->

<!-- Read more students success story -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 fullSection">
        <div class="successBack successBack1">
          <p class="succesPara">The process to apply to study in Canada was very difficult and confusing for me, until I discovered ApplyBoard! ApplyBoard helped me every step of the way to apply to the college I dreamt of. I would love to thank everyone at ApplyBoard for their help and professionalism.</p>
          <p>— Bahri S., International Student at Conestoga College</p>
          <p> <ul>Read More Student Success Stories </ul>></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Read more students success story -->



<!-- Friquently ask questions ACCEPTANCE AND ADMISSION end -->


<section id="What">
  <div class="container">
    <div class="storyContactTitle">FAQ</div>
<h4 class="acceptancePara">ACCEPTANCE AND ADMISSION</h4>
      <div class="row">
        <!-- <section> <h2 class="ourStroyTitle">What We Do?</h2> </section> -->
        
      <div class="col">      
        <div class="storyprofile wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
          
          <h3>What is an acceptance/
            admission letter?</h3> 
          <p>
            An acceptance/admission
            letter is the letter of 
            confirmation that the 
            designated institution 
            of your choice has accepted 
            you. This letter is one of the 
            requirements needed to 
            apply for a study permit in 
            Canada or the United 
            States. This letter is 
            commonly referred to as the 
            letter of acceptance or LOA.</p>
          
        </div>
      </div>
  
      <div class="col">
        <div class="storyprofile">
          <h3>How do I get an 
            acceptance letter?</h3>
          <p>         
            Every institution has its own 
            rules and requirements to get 
            accepted. Acceptance is based 
            on the individual school’s 
            discretion
            </p>        
        </div>
      </div>

      <div class="col">
        <div class="storyprofile">
          <h3>Do I have to pay to defer my acceptance letter?</h3>
          <p>         
            Yes. ApplyBoard is now 
            charging $100-250 in order to 
            defer your program to the next 
            intake. However, if you provide 
            us with the receipt of your tuition 
            deposit, we will waive the 
            deferral fee. Please be advised 
            that when you defer your 
            acceptance letter, you may 
            need to pay additional fees, as 
            required by the school.
          </p>        
        </div>
      </div>

      <div class="col">
        <div class="storyprofile">
          <h3>When do I have to pay
            my application and
             tuition fee?</h3>
          <p>
            Application Fee: You must pay the 
            application fee before submitting 
            your application. The application 
            fee is charged by schools and is 
            non-refundable. The schools will 
            not review your application if your 
            application fee is not paid.

            Note: ApplyBoard does NOT 
            charge any extra fees for 
            processing your application. We 
            collect the exact amount schools 
            charge for your convenience and 
            pay it directly to the school. We 
            are totally free for all 
            students/applicants and are only 
            paid by schools. 

            Tuition Fee: You have to pay the 
            tuition fee for each semester at the 
            beginning of the school’s semester.

            Some schools require that you pay 
            a deposit amount after obtaining 
            your acceptance letter in order to 
            secure your position in the school. 
            The deposit amount is a portion of 
            the first semester’s tuition fee and 
            is usually less than $1,500.

            If you do not get your visa, the 
            school will fully refund your 
            deposit back to you. 

            Note: You do not have to pay any 
            tuition before getting your 
            acceptance.

            Note: Unlike the deposit, the 
            application processing fee will 
            not be refunded if your visa 
            application is refused.

            Note: We have calculated the
            total annual tuition fees for each 
            school for you convenience but 
            this does NOT mean you have to 
            pay the listed annual tuition at the 
            beginning o
          </p>            
        </div>
      </div> 
      <div class="col">
        <div class="storyprofile">
          <h3>Do I have to pay the 
            tuition fee in order to 
            obtain an acceptance
            letter?</h3>
          <p>
            In most cases, no.
            However, this depends on the
            institution of your choice. They 
            may or may not require you to 
            pay your tuition in order to 
            receive the letter of acceptance.
          </p>            
        </div>
      </div> 
      
    </div>
    </div>
  </section>

<!-- Friquently ask questions ACCEPTANCE AND ADMISSION end -->
<!-- about apply board start -->


<section id="What">
  <div class="container-fluid">
    <div class="storyContactTitle">FAQ</div>
<h4 class="acceptancePara">ABOUT APPLYBOARD</h4>
      <div class="row">
        <!-- <section> <h2 class="ourStroyTitle">What We Do?</h2> </section> -->
        
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">      
        <div class="storyprofile wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
          
          <h3>How does ApplyBoard 
            help me?</h3> 
          <p>
            ApplyBoard provides you with 
            the resources to find and apply 
            to the school and program that 
            are the right fit for your interests 
            and needs. ApplyBoard will 
            guide you through the entire 
            application process, helping you 
            obtain your letter of acceptance 
            so you can begin studying at the 
            school of your dreams.</p>
          
        </div>
      </div>
  
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
        <div class="storyprofile">
          <h3>What are "Designated 
            Institutions" in Canada?</h3>
          <p>         
            Designated institutions are 
            predetermined and approved 
            institutions by the Canadian 
            Embassy. A list of designated 
            institutions can be found on the 
            CIC official website and are 
            subject to change.
</p>        
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
        <div class="storyprofile">
          <h3>Can I study in North 
            America with a visitor 
            visa?</h3>
          <p>         
            If you wish to enroll and study in 
            a short-term course (6 months or 
            less) or a program such as 
            English for academic purposes/
            English as a second language, 
            you are NOT REQUIRED to 
            apply for a study permit.
            
            For programs longer than 6 
            months, you ARE REQUIRED to 
            apply for a study permit.
          </p>        
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
        <div class="storyprofile">
          <h3>How much does it cost to 
            apply to each program?</h3>
          <p>
            The application fee is usually 
            between $50 to $300 for each 
            program. You can find the exact 
            application fee for each program 
            on the associated program’s 
            page on our website.
            
            Universities and colleges in 
            Canada and the USA charge an 
            application fee to process your 
            application and to issue your 
            acceptance letter if you are 
            deemed eligible. Application 
            fees vary based on institution 
            and program. The application 
            fees that you pay to ApplyBoard 
            are the exact amount that your 
            selected institution(s) charge(s) 
            to process an international 
            student application. These 
            amounts go directly toward the 
            institution’s application fee.
            
            ApplyBoard does not charge 
            you extra for our services.
            These services are totally 
            free for applicants because 
            we are only paid by our 
            associated high schools, 
            universities and colleges!
            
            Please contact us at 
            help@applyboard.com if you 
            have any further questions. 
            We are happy to help.
          </p>            
        </div>
      </div> 
      
    </div>
    </div>
  </section>







<!-- about apply board end -->

<!-- find and apply to the best program and schools for you start -->
<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="dream-application bestProgramBack wow animate__animated animate__jackInTheBox" data-wow-duration="1.5s" data-wow-delay=".5s">                  
     
      <h2 class="bestProgramtitle">Find and Apply to the Best <br> 
        Programs and Schools for <br>
        You
        </h2>
        <div class="main-button bestProgrambtn">    
          <button type="button" class="btn button studyDreamSchoolbtn">
                Get Started
              </button>
          </div>
      
   </div>
   </div>
   </div>
   </div>
 </section>  

@endsection