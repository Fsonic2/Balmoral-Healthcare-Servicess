
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><img src="../img/logo.jpg"></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Care Services</span> <i class="fa fa-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Home Care</a></li>
              <li class="dropdown"><a href="#"><span>Care Homes</span> <i class="fa fa-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Live-in Care</a></li>
                  <li><a href="#">Extra Care</a></li>
                </ul>
              </li>
              <li><a href="#">Supported Living</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Careers</span> <i class="fa fa-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>HR</span> <i class="fa fa-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Employment Office</a></li>
                  <li><a href="#">Referral Rates</a></li>
                  <li><a href="#">You Care, so do we</a></li>
                </ul>
              </li>
              <li><a href="#">Health Worker</a></li>
              <li><a href="#">Care Giver</a></li>
            </ul>
            <li><a href="{{ route('contact')}}">Contact</a></li>
          </li>
          <li></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none fa fa-list"></i>
      </nav>

      <a class="btn btn-warning" href="{{ route('jobs') }}">Jobs Vacancy</a>

    </div>
  </header>