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

  <img src="../img/healthcare-bg.jpg" alt="" data-aos="fade-in" class="">

  <div class="container">
    <div class="row" data-aos="zoom-out">
      <div class="col-xl-7 col-lg-9 text-left">
        <h1>Welcome to Balmoral Healthcare Services</h1>
      </div>
    </div>
    <div class="text-right" data-aos="zoom-out" data-aos-delay="100">
      <a href="{{ route('about')}}" class="btn-get-started">Get Started</a>
    </div>

    <div class="row gy-4 mt-5">
      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-easel"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-gem"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-geo-alt"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-command"></i></div>
          <h4 class="title"><a href="">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div><!--End Icon Box -->

    </div>
  </div>

</section><!-- /Hero Section -->
</main>
    <!-- Main Content -->
   <!-- Call To Action Section -->
   <section id="call-to-action" class="call-to-action section accent-background">

<div class="container">
  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
      <div class="text-center">
        <h3> Can't find a suitable vacancy?</h3>
        <p>Register with us to receive job alerts in your chosen area.</p>
        <a class="cta-btn" href="#">Register</a>
      </div>
    </div>
  </div>
</div>

</section><!-- /Call To Action Section -->
<section id="about-alt" class="about-alt section">

<div class="container">

  <div class="row gy-4">
    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
      <img src="assets/img/about.jpg" class="img-fluid" alt="">
      <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
    </div>
    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
      <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
      <p class="fst-italic">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <ul>
        <li><i class="fa fa-check-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
        <li><i class="fa fa-check-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
        <li><i class="fa fa-check-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
      </ul>
      <p>
        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
      </p>
    </div>
  </div>

</div>

</section><!-- /About Alt Section -->
    <div class="container py-10">
         @yield('content')
        <h1>Welcome to Laravel!</h1>
        <p>This is the main content area.</p>
    </div>
    <footer class="text-white text-center py-3 mt-auto">
    <div class="container">
      <!-- Footer (Optional) -->
      @extends('layouts.footer')
      </div>
    </footer>
  
</body>
</html>
