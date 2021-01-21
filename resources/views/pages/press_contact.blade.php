@extends('layouts.main-app')

@section('content')
<!-- Main Start -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-sm-12">
        <div class="storyContact">
          <h3 class="StroyContactTitle">Our Story</h3>
          <p>ApplyBoard empowers people around the world to access the best education. We are the world’s largest online platform for international student recruitment.</p>
          <button type="button" class="btn button">
            Access Media Kit
          </button>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12">
        <div class="storyContact">
          <h3 class="StroyContactTitle">Press Contact</h3>
          <p>ApplyBoard empowers people around the world to access the best education. We are the world’s largest online platform for international student recruitment.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main End -->

<!-- only text -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="onlytext">
        <p class="planText mx-auto">Since ApplyBoard was launched in 2015, we have assisted 120,000+ students apply to educational institutions world wide! To accomplish this, we’ve built partnerships with over 1,200 educational institutions and 4,000 recruitment partners. Our headquarters is located in Kitchener, Ontario. We employ 550+ team members in 20+ countries.</p>
        <img src="{{ asset('img/storyContact/ApplyBoard-Team-Photo.png') }}" alt="teamphoto" class="teamphoto">
      </div>
      </div>
    </div>
  </div>
</section>
<!-- only text -->

<!-- Featured News start -->

<section>
  <div class="container">
    <div class="storyContactTitle">Awards We've Own</div>

    <div class="row">
      <!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            
            <img src="{{ asset('img/storyContact/deloitte_logo-2.png') }}" alt="" class="featuredPhoto">
            <div class="featuredText featured">
            <p >NOVEMBER 2020
            </p> 
             <p >ApplyBoard Named One of Canada’s Fastest-Growing Companies by Deloitte for Second Year in a Row
            </p> 
            <p >Ranked #2 on the Deloitte Technology Fast 50™ list and #14 on the Technology Fast 500™ for 2020, ApplyBoard is recognized for its innovation, entrepreneurship, and growth.</p>    
         </div>
          </div>
          </div>
       

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            <img src="{{ asset('img/storyContact/Linkedin30.png') }}" alt="" class="featuredPhoto">
            <div class="featuredText1 featured">
            <p class="featuredText1">SEPTEMBER 2020
            </p> 
             <p>ApplyBoard Ranked 3 on LinkedIn’s 2020 Top Startups List in Canada

            </p> 
            <p>Linkedin’s third annual Top Startups list reflects 10 companies that have remained resilient during a tumultuous time, continuing to attract investment, employees and attention.</p>    
          </div>
        </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            <img src="{{ asset('img/storyContact/ApplyBoard_Logo_Press_News.png') }}" alt="" class="featuredPhoto">
            <div class="featuredText2 featured">
            <p>SEPTEMBER 2020
            </p> 
             <p>ApplyBoard Secures C$70M in Series C Funding Extension and Announces Partnership with ETS

            </p> 
            <p>Strategic partnership with TOEFL creator and additional funding will empower more students to access the best educational opportunities around the world.</p>    
          </div>
        </div>
      </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            <img src="{{ asset('img/storyContact/TechCrunch.png') }}" alt="" class="featuredPhoto">
           <div class="featuredText3 featured">
           
            <p>MAY 2020
            </p> 
             <p>EdTech’s Newest Unicorn, ApplyBoard, Lands $1.4B Valuation with Fresh Funding

            </p> 
            <p>Today, the Ontario-based startup announced it raised $75 million (USD) at a $1.5 billion (USD) valuation, making it the latest edtech unicorn.</p>    
          </div>
        </div>
</div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            <img src="{{ asset('img/storyContact/ApplyBoard_Logo_Press_News.png') }}" alt="" class="featuredPhoto">
            <div class="featuredText4 featured">
            <p>FEBRUARY 2020
            </p> 
             <p>ApplyBoard Appoints The Right Honourable Jo Johnson Chairman of Advisory Board

            </p> 
            <p>Jo Johnson, former UK Minister of State for Universities, Science & Innovation, joins ApplyBoard as Chairman of Advisory Board.</p>    
          </div>
        </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">      
          <div class="ourValueparts1 wow animate__animated animate__backInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" >
            <img src="{{ asset('img/storyContact/forbes_logo.png') }}" alt="" class="featuredPhoto">
            <div class="featuredText5 featured">
            <p>DECEMBER 2019
            </p> 
             <p>Forbes Selects ApplyBoard’s Meti and Massi Basiri to Three Top 30 Under 30 Lists​
            </p> 
            <p>ApplyBoard Co-Founders and brothers, Meti and Massi Basiri, are list on the Forbes Top 30 Under 30, ranking on three different lists including Immigrants, Education, and Big Money.</p>    
          </div>
        </div>
        </div>
      </div>
  </div>
</section>
<!-- Featured News End -->

<!-- awards we have own -->
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="storyContactTitle">Awards We've Own</div>
        <div class="ownPhotos">
        <img src="{{ asset('img/storyContact/LinkedIn_Logo_TopStartups2020_100.png') }}" alt="">
        <img src="{{ asset('img/storyContact/Deloitte_Fast50_2020.png') }}" alt="">
        <img src="{{ asset('img/storyContact/CIX_Top10_Growth_Logo-1.png') }}" alt="">
      </div>
</div>
    </div>
  </div>
</section>
<!-- awards we have own -->
<!-- Additional Coverage -->
<section>
  <div class="container-fluid">
    <div class="storyContactTitle">Additional Coverage</div>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <p class="additionalText">GSV Ventures <br> 

          October 2020 <br>
          
          ApplyBoard Named to GSV Global EdTech 50 <br>
          
          Forbes <br>
          
          September 2020 <br>
          
          Study Abroad EdTech Company ApplyBoard Raises $55 Million Series C Extension At $1.4 Billion Valuation <br>
          
          The PIE News<br>
          
          September 2020<br>
          
          ApplyBoard Links Up with ETS, a New Investor as Part of Series C<br>
          
          BetaKit<br>
          
          September 2020<br>
          
          ApplyBoard Secures $70 Million, Pens Deal to Expand EdTech Platform’s Capabilities<br>
          
          Tracxn<br>
          
          September 2020<br>
          
          Emerging Startups 2020: Top Higher Education Tech<br>
          
          Financial Post<br>
          
          May 2020<br>
          
          ApplyBoard Raises C$100M in Series C Funding Round<br>
          
          Global Education Times<br>
          
          May 2020<br>
          
          ApplyBoard Raises $100 Million in Latest Funding Round<br>
          
          BetaKit<br>
          
          February 2020<br>
          
          Jo Johnson Joins as Chairman at Kitchener’s ApplyBoard<br>
          
          Deloitte<br>
          
          November 2020<br>
          
          ApplyBoard Named Canada’s Fastest-Growing Technology Company by Deloitte​<br>
          
          CTV News<br>
          
          November 2019<br>
          
          New Study Shows Big Economic Boost from UW’s Startup Community<br>
          
          CIX<br>
          
          September 2019<br>
          
          ApplyBoard Named to CIX Top-10 Growth List<br>
          
          EdTechX <br>
          
          July 2019<br>
          
          ApplyBoard is a Finalist for the EdTechXGlobal Scale-Up Award<br>
          
          The PIE<br>
          
          June 2019<br>
          
          ApplyBoard is a Finalist for the 2019 PIEoneer of the Year Award<br>
          
          BetaKit<br>
          
          May 2019 <br>
          
          ApplyBoard Raises $55 Million CAD Series B for International Student Recruitment Platform<br>
          
          The Globe & Mail<br>
          
          May 2019<br>
          
          ApplyBoard continues ‘unbelievably phenomenal’ growth by raising $55-million<br>
          
          Communitech<br>
          
          April 2019<br>
          
          ​New Office, New Growth for ApplyBoard<br>
          
          CTV News<br>
          
          May 2019<br>
          
          Schools Reaching Out to International Students<br>
          
          Forbes<br>
          
          January 2019<br>
          
          International Students Ponder Where to Get the Best Education<br>
          
          The PIE<br>
          
          November 2018<br>
          
          ApplyBoard Hosts Canada’s Minister of Immigration​<br>
          
          Forbes<br>
          
          November 2018<br>
          International Students Pour into Canada While the US and Others Lag Behind<br>  
          BetaKit<br>
          June 2018<br>
          ApplyBoard Raises $17 Million to Improve International Student Applications with AI<br>
          </p>
      </div>
    </div>
  </div>
</section>
@endsection