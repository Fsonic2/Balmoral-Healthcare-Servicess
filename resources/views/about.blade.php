<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>HBN</title>
    <!-- Add your CSS files here -->
</head>
<body>
<div class="container-floud">
 @include('layouts.navigation')   
</div>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">

  <img src="public/img/erlianddaughter.jpg" alt="" data-aos="fade-in" class="">

  <div class="container">
    <div class="row" data-aos="zoom-out">
      <div class="col-xl-9 col-lg-9 text-left">
        <h1>Creating healthier futures. It starts with you. </h1>
      </div>
    </div>
    <div class="text-right" data-aos="zoom-out" data-aos-delay="100">
      <a href="{{ route('about')}}" class="btn-get-started bg-warning">Get Started</a>
    </div>

  
  </div>

</section><!-- /Hero Section -->

</main>
 <!-- About Section -->
 <section id="about" class="about section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>About Us<br></h2>
  <p>What kind of care do I need?

Use our online care options tool to help you decide what kind of care you need.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
      <p><span class="text-primary bold"><h2>Quality, affordable care</h2></span></p>
      <ul>
        <li><i class="fa fa-check"> </i> <span>We provide an extraordinary range of flexible care options nationwide, all fully-managed under one roof and designed around you.</span></li>
        <li><i class="fa fa-check"> </i> <span>Health and Safety Compliance</span></li>
        <li><i class="fa fa-check"> </i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
      </ul>
    </div>

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h2>Why Balmoral Healthcare Services?</h2>
        <p> <i class="fa fa-check"> </i> Since 2021 we’ve remained a family-owned care provider, trusted by thousands of individuals to deliver reliable, high-quality care every day. Our fully-managed service covers a range of care options, from residential care to tailored support at home.</p>
      <p><i class="fa fa-check"> </i> Our purpose is to build a healthier nation. Here, everyone shares a passion for doing the right thing – for our patients, our customers, our members and each other. </p>
      <p><i class="fa fa-check"> </i> None of it would be achievable without that heartfelt desire to make a difference. Whether that difference is to help save a patient’s life, or to become a better health and wellbeing expert – at Nuffield Health, we provide the culture and support for you to do it all.   </p>
      <a href="#" class="read-more bg-warning"><span>Read More</span><i class="fa fa-arrow-right"></i></a>
    </div>

  </div>

</div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Employees</p>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hospitals</p>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
        <p>Fitness and Wellbeing Centres and 153 Workplace Wellbeing Services</p>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
        <p>Workers</p>
      </div>
    </div><!-- End Stats Item -->

  </div>

</div>

</section><!-- /Stats Section -->

<!-- About Alt Section -->

</section><!-- /About Alt Section -->
</main> <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <h2>Our Services</h2>
      </div><!-- End Section Title -->
        
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="public/homecare/in-care-2 (3).webp" class="img-fluid" alt="">
                <div class="social">
                </div>
              </div>
              <div class="member-info">
                <h2>Care & Nursing</h2>
                <p><span><i class="fa fa-chevron-right"> </i> Trial period</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> All-inclusive fee<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Designated care advisor</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> No lengthy contracts<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> 24 hours starts (inc weekends)</span></p>
                <a class="btn btn-warning" href="">Find out more</a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="public/homecare/in-care-2 (2).webp" class="img-fluid" alt="">
                <div class="social">
                </div>
              </div>
              <div class="member-info">
              <h2>Home Care</h2>
                <p><span><i class="fa fa-chevron-right"> </i> Person centred, flexible care<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Immediate and emergency starts</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> No lengthy contracts<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Designated care advisor</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Trial period</span></p>
                <a class="btn btn-warning" href="">Find out more</a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="public/homecare/in-care-2 (1).webp" class="img-fluid" alt="">
                <div class="social">
                </div>
              </div>
              <div class="member-info">
              <h2>Live-in Care</h2>
                <p><span><i class="fa fa-chevron-right"> </i> Local office team</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> No lengthy contracts<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Person centred, flexible care<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> No seasonal surcharges</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Designated care advisor</span></p>
                <a class="btn btn-warning" href="">Find out more</a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="public/homecare/in-care-2 (4).webp" class="img-fluid" alt="">
                <div class="social">
                </div>
              </div>
              <div class="member-info">
              <h2>Supported living</h2>
                <p><span><i class="fa fa-chevron-right"> </i> Immediate and emergency starts</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Person centred, flexible care<span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Teial period</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> Designated care advisor</span></p>
                <p><span><i class="fa fa-chevron-right"> </i> No lengthy contracts<span></p>
                <a class="btn btn-warning" href="">Find out more</a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <footer class="text-white text-center py-3 mt-auto">
    <div class="container">
      <!-- Footer (Optional) -->
      @extends('layouts.footer')
      </div>
    </footer>
  
</body>
</html>
