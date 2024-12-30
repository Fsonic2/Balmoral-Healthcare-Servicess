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
      <a href="{{ route('about')}}" class="btn btn-warning">Get Started</a>
    </div>

    <div class="row gy-4 mt-5">
      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class=""></i></div>
          <h4 class="title"><a href="">Operating since 2021 </a></h4>
          <p class="description">With a successful track record and reputation built over four decades we deliver high quality care that you can rely on</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class=""></i></div>
          <h4 class="title"><a href="">Family-owned with
          values to match</a></h4>
          <p class="description">We’re independent with no external investors, giving you peace of mind that we’ll be around today, tomorrow and for years to come</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class=""></i></div>
          <h4 class="title"><a href="">Fast and simple
          set-up of care</a></h4>
          <p class="description">We’re experts in care, whether its planned, immediate or an emergency – that’s around the clock and even at weekends</p>
        </div>
      </div><!--End Icon Box -->

      <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class=""></i></div>
          <h4 class="title"><a href="">Find the care
          you need now</a></h4>
          <p class="description">We offer a comprehensive range of services – it’s how we tailor your care to you in a way that very few other providers nationwide can</p>
        </div>
      </div><!--End Icon Box -->

    </div>
  </div>

</section><!-- /Hero Section -->
</main>
    <!-- Main Content -->

<section id="about-alt" class="about-alt section">

<div class="container">

  <div class="row gy-4">
    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
      <img src="../img/erlizatte.jpg" class="img-fluid" alt="">
    
    </div>
    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
      <h2>Balmoral Healthcare Services</h2>
      <p class="fst-italic">
      Since 2021 we’ve remained a family-owned care provider, trusted by thousands of individuals to deliver reliable, high-quality care every day. Our fully-managed service covers a range of care options, from residential care to tailored support at home.
      </p>
      <ul>
        <span><h2>Vision</h2></span>
        <li><i class="fa fa-check pb-3"></i> <span>To become the most trusted Care agency in the UK.</span></li>
        <span><h2>Mission</h2></span>
        <li><i class="fa fa-check pb-3 pt-3"></i> <span>To deliver compassionate care and service every time. To continuously train and develop our carers. never let our clients down.</span></li>
        <span><h2>Values</h2></span>
        <li><i class="fa fa-check pt-3"></i> <span>To build trust. 

To always demonstrate integrity and compassion. 

To share our love and empathy. 

Go the extra mile.</span></li>
     
      <p>
      <li><i class="fa fa-check pb-3"></i> <span> With Care is fuelled by compassion and dedication to making a real difference in the lives of those we serve. 
</li>

<li><i class="fa fa-check pb-3"></i> <span>Our carers will always try and go the extra mile, not only demonstrating love and respect but crucially understanding that whatever stage you are in life, you still have a sense of humour and want to have fun. Care is not just a service, it's a journey of enrichment, empowerment, and understanding.</li> 

<li><i class="fa fa-check pb-3"></i> <span>At Live with Care, we understand that every individual is a unique tapestry of stories. Our range of Care is designed to cater to every facet of life. </li>

<li><i class="fa fa-check pb-3"></i> <span>As an agency with a very personal touch, we know care is not just about tending to physical needs, it is about fostering an environment that respects privacy, independence, and dignity, this is the ethos and core of our business</li>


<li><i class="fa fa-check pb-3"></i> <span>BHCS powers the recruitment for a large proportion of the UK's public sector workforce. Create an account to apply for jobs and track the progress of your applications including employment checks, appointments and more. </li>


<li><i class="fa fa-check pb-3"></i> <span>No carer will ever be placed with a client unless they have personally interviewed and vetted 

by one of the owners of the business.</li>


<li><i class="fa fa-check pb-3"></i> <span>Brand Promise

We will care for your loved ones as if they are our own.
Brand Purpose

Do our best to make every day that little bit better.</li>

<li><i class="fa fa-check pb-3"></i> <span> As an agency with a very personal touch, we know care is not just about tending to physical needs, it is about fostering an environment that respects privacy, independence, and dignity, this is the ethos and core of our business</LI>

<ul>    
</p>
    </div>
  </div>

</div>

   <!-- Call To Action Section -->
   <section id="call-to-action" class="call-to-action section bg-warning">

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
 <!-- Team Section -->

 <section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member">
        <div class="member-img">
          <img src="../team/team-1.jpg" class="img-fluid" alt="">
          <div class="social">
          <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Walter White</h4>
          <span>Chief Executive Officer</span>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
      <div class="team-member">
        <div class="member-img">
          <img src="../team/team-2.jpg" class="img-fluid" alt="">
          <div class="social">
          <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Sarah Jhonson</h4>
          <span>Product Manager</span>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
      <div class="team-member">
        <div class="member-img">
          <img src="../team/team-3.jpg" class="img-fluid" alt="">
          <div class="social">
          <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>William Anderson</h4>
          <span>CTO</span>
        </div>
      </div>
    </div><!-- End Team Member -->

    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
      <div class="team-member">
        <div class="member-img">
          <img src="../team/team-4.jpg" class="img-fluid" alt="">
          <div class="social">
          <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4>Amanda Jepson</h4>
          <span>Accountant</span>
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
