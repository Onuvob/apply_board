<!-- Navigation Bar -->
<header class="header-area">
    <div class="main-menu">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-color" id="enjoy">
    <a class="navbar-brand" href="{{ route('welcome') }}">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <a class="nav-link" href="#Services">Services</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('programs') }}">Students</a>
            <a class="dropdown-item" href="{{ route('increase.presence') }}">Schools</a>
            <a class="dropdown-item" href="{{ route('work.with.recruitment.partners') }}">Recruiters</a>
          </div>
        </li> 
        <!-- <li class="nav-item">
          <a class="nav-link" href="#About">About</a>
        </li>      -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('our.story') }}">Our Story</a>
            <a class="dropdown-item" href="{{ route('help.student') }}">Careers</a>
            <a class="dropdown-item" href="{{ route('press.contact') }}">Press</a>
            <a class="dropdown-item" href="{{ route('help.us') }}">Life</a>
            <a class="dropdown-item" href="{{ route('team') }}">Leadership</a>
            <a class="dropdown-item" href="{{ route('company.information') }}">Contact</a>
          </div>
        </li>     
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
        </li>
        @if (Route::has('login'))
        <li class="nav-item log">
            @auth
                <a class="nav-link nav-log" href="{{ route('home') }}">Home</a>
            @else
                <a class="nav-link nav-log" href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a class="nav-link nav-log" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
          {{-- <a class="nav-link nav-log" href="{{ route('login') }}">Login</a> --}}
          {{-- <a class="nav-link nav-log" href="./login.html">Login</a> --}}
        </li>
        @endif
        
    </div>
  </nav>
  </div>
</header>
  <!-- Navigaiton Bar End -->