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

<img src="../img/erlianddaughter.jpg" alt="" data-aos="fade-in" class="">

<div class="container">
  <div class="row" data-aos="zoom-out">
    <div class="col-xl-10 col-lg-9 text-left">
      <h1>Please call or complete the form below if have any questions.</h1>
      <p>Do not use the form for any urgent queries as it is not monitored 24/7. Jobs seekers can view our latest vacancies and apply online.</p>
    </div>
  </div>
  <div class="text" data-aos="zoom-out" data-aos-delay="100">
    <a href="{{ route('contact') }}" class="btn-get-started"><i class="fa fa-arrow-right"></i> Contact Us</a>
  </div>
</div>
</section><!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="fa fa-home flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Chambers Business Centre

Chapel Rd Oldham, OL8 4QQ

United Kingdom</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="fa fa-phone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+44-754-6177-925 </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="fa fa-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>complain@balmoralhealthcareservices.co.uk</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
          </main>
    </section><!-- /Contact Section -->
   
    <footer class="text-white text-center py-3 mt-auto">
    <div class="container">
      <!-- Footer (Optional) -->
      @extends('layouts.footer')
      </div>
    </footer>
  
</body>
</html>
