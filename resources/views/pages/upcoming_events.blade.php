@extends('layouts.main-app')

@section('content')
<!-- main start -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  upcomingmainimg">
                <img src="{{ asset('img/wherewillbeupcomingevents/Path 12.png') }}" alt="Main Picture">
            </div>
        </div>
    </div>   
</section>

<!-- main end -->

<!-- where will be upcoming events start-->
<section class="whereupcomingevents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="text-center">
                <h2 class="ourStroyTitle">WHERE WE'LL BE <br>Upcoming Events </h2>
                <p>Due to COVID-19, the majority of industry events have been placed on hold or rescheduled <br>
                    for a future date. Check back soon for an update on where you can meet ApplyBoard.</p>
                <img src="{{ asset('img/wherewillbeupcomingevents/CBIE2020.png') }}" alt="CBIE 202OPicture">
                
                <P class="whebinerdate mx-auto"> November 16 – 20, 2020</P>
                <h2 class="ourStroyTitle">CBIE 2020 <br> Online </h2>
                <p>
                    ApplyBoard is very excited to be the premier sponsor of <br>
                    CBIE 2020 and their bursary program.</p>
            </div>
            </div>
        </div>
    </div>   
</section>

<!-- where will be upcoming events ends-->

<!-- upcoming webiniers start-->

<section class="whereupcomingevents ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <h2 class="ourStroyTitle">Upcoming Webinars </h2>
                <p class="webhinertext text-center">We invite you to register for one of our webinars below.</p>
                <div class="upcomingwebinars mx-auto">                 
                  <img src="{{ asset('img/wherewillbeupcomingevents/BC_Interior_Webinar.png') }}" alt="Bc interior webinior">
                  <h2 class="ourStroyTitle">British Columbia <br>
                    (Northern & Interior) <br>
                    Information Session</h2>
                    <h4 class="ourStroyTitle">November 17, 2020 | 11:00 AM ET <br>
                        November 18, 2020 | 4AM ET</h4>
                        <h5 class="ourStroyTitle">Audience: Recruitment Partners & Students</h5>
                <p>
                    Canada is the world’s second-largest country by landmass, covering 9.98 million km². With 10 provinces, 3 territories, and multiple climates, Canada is a diverse and exciting country. Our Coast-to-Coast Series explores how Canada differs from province to province, and how students can choose the region that is right for them and their study goals!

Featuring representatives from our partner institutions in British Columbia (BC), specifically the interior and northern sections of the province. This webinar will cover school highlights, provincial opportunities and advantages, and job prospects, along with a Q&A section where our experts will be answering questions that have been submitted by attendees. Join us and register today!

This webinar will feature panelists from:

The University of Northern BC
Thompson Rivers University
North Island College
                </p>
                <p class="registrationdate mx-auto">Register (November 17) </p>
                <p class="registrationdate mx-auto">Register (November 18) </p>
                </div>
            
            </div>
        </div>
    </div>   
</section>
@endsection