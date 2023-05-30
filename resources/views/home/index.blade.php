<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="home/assets/img/favicon.png" rel="icon">
  <link href="home/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="home/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope"></i>
          <a href="mailto:contact@example.com">{{ $option->email }}</a>
          <i class="bi bi-phone"></i> {{ $option->phone_number }}
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="{{ $option->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ $option->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $option->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ $option->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="{{ $option->telegram }}" class="linkedin"><i class="bi bi-telegram"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">{{ $option->logo }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="home/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url({{ url('/upload/setting/'.$option->hero_image) }}) top center no-repeat;background-size:100%">
    <div class="container">
      <h1>{{ $option->hero_title }}</h1>
      <h2>{{ $option->hero_description }}</h2>
      <a href="{{ $option->hero_button_src }}" class="btn-get-started scrollto">{{ $option->hero_button_text }}</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>{{ $option->why_choose_title }}</h3>
              <p>
                {{ $option->why_choose_description }}
              </p>
              <div class="text-center">
                <a href="{{ $option->why_choose_button_src }}" class="more-btn">
                  {{ $option->why_choose_button_text }}
                  <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                {{-- start whyUs --}}
                @foreach ($whyUs as $item)
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="{{ $item->icon }}"></i>
                    <h4>{{ $item->title }}</h4>
                    <p>{{  $item->description  }}</p>
                  </div>
                </div>
                @endforeach
                {{-- end whyUs --}}
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" style="background: url({{ url('upload/setting/'.$option->why_us_image) }}) center center no-repeat;">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>{{ $option->why_us_title }}</h3>
            <p>{{ $option->why_us_description }}</p>

            {{-- why choose start --}}
            @foreach ($whyChooses as $item)
            <div class="icon-box">
              <div class="icon">
                <i class="{{ $item->icon }}"></i>
              </div>
              <h4 class="title">
                <a href="">{{ $item->title }}</a>
              </h4>
              <p class="description">
                {{ $item->description }}
              </p>
            </div>
            @endforeach
            {{-- why choose end --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $doctorCount }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $departmentCount }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->service_title }}</h2>
          <p>{{ $option->service_description }}</p>
        </div>

        <div class="row">
          {{-- servive items --}}
          @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon">
                  <i class="{{ $service->icon }}"></i>
                </div>
                <h4>
                  <a href="">Lorem Ipsum</a>
                </h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          @endforeach
          {{-- end service items --}}
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->appointment_title }}</h2>
          <p>{{ $option->appointment_description }}</p>
        </div>

        <form action="{{ route('appointment.store') }}" method="post" role="form">
          @csrf
          @method('POST')
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" >
            </div>

          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" >
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department_id" id="department" class="form-select">
                <option selected @disabled(true) >Select Department</option>
                @foreach ($departments as $department)
                  <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor_id" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                @foreach ($doctors as $doctor)
                  <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->positionDoctor->position}}</option>
                @endforeach
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-md btn-outline-primary my-2">Make an Appointment</button>
          </div>
        </form>
      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->departments_title }}</h2>
          <p>{{ $option->departments_description }}</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              {{-- start tab panel item --}}
              @foreach ($departments as  $key => $department)
                <li class="nav-item">
                  <a class="nav-link {{ $loop->last ? 'show active' : '' }} " data-bs-toggle="tab" href="#tab-{{$department->id}}">{{ $department->name }}</a>
                </li>
              @endforeach
              {{-- end tab panel item --}}
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              {{-- start tab panel --}}
              @foreach ($departments as $department)
                <div class="tab-pane {{ $loop->last ? 'show active' : '' }}" id="tab-{{$department->id}}">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>{{ $department->name }}</h3>
                      <p class="fst-italic">
                        {{ $department->description }}
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ url('/upload/department/'.$department->image)}}" alt="{{  $department->name }}" class="img-fluid">
                    </div>
                  </div>
                </div>
              @endforeach
              {{-- end tab panel --}}
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->doctors_title }}</h2>
          <p>{{ $option->doctors_description }}</p>
        </div>

        <div class="row">

          {{-- start doctors loop --}}
          @foreach ($doctors as $doctor)
          <div class="col-lg-6 my-2">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img src="{{ url('/upload/doctor/'. $doctor->image) }}" class="img-fluid" alt="{{ $doctor->name }}">
              </div>
              <div class="member-info">
                <h4>{{ $doctor->name }}</h4>
                <span>{{ $doctor->positionDoctor->position }}</span>
                <p>{{ $doctor->biography }}</p>
                <div class="social">
                  <a href="{{ $doctor->twitter }}">
                    <i class="ri-twitter-fill"></i>
                  </a>
                  <a href="{{ $doctor->facebook }}">
                    <i class="ri-facebook-fill"></i>
                  </a>
                  <a href="{{ $doctor->instagram }}">
                    <i class="ri-instagram-fill"></i>
                  </a>
                  <a href="{{ $doctor->linkedin }}"> 
                    <i class="ri-linkedin-box-fill"></i> 
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- end doctor loop --}}
        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->questions_title }}</h2>
          <p>{{ $option->questions_description }}</p>
        </div>

        <div class="faq-list">
          <ul>
            {{-- faq answer start --}}
            @foreach ($faqs as $faq)
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$faq->id}}">
                  {{ $faq->answer }}
                  <i class="bx bx-chevron-down icon-show"></i>
                  <i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="faq-list-{{$faq->id}}" class="collapse {{ $loop->last ? 'show active' : '' }}" data-bs-parent=".faq-list">
                  <p>
                    {{ $faq->question }}
                  </p>
                </div>
              </li>
            @endforeach
            {{-- faq answer end --}}
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($contacts as $item)
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3>{{ $item->name }}</h3>
                    <h4>{{ $item->subject }}</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{ $item->message }}
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->gallery_title }}</h2>
          <p>{{ $option->gallery_description }}</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">
          {{-- start galleries item --}}
          @foreach ($galleries as $galley)
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="{{ url('/upload/gallery/'.$galley->image) }}" class="galelry-lightbox">
                  <img src="{{ url('/upload/gallery/'.$galley->image) }}" alt="galley->image" class="img-fluid">
                </a>
              </div>
            </div>
          @endforeach
          {{-- end galleries item --}}
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>{{ $option->contact_title }}</h2>
          <p>{{ $option->contact_description }}</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $option->address }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $option->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $option->phone_number }}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{ route('contact.store') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-md btn-outline-primary my-3">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              {{ $option->address }} <br>
              <strong>Phone:</strong> {{ $option->phone_number }}<br>
              <strong>Email:</strong> {{ $option->email }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          {{ $option->footer_description }}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://github.com/CarlAlaeddin">bootstrapmade & {{ $option->author }} </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{ $option->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $option->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $option->telegram }}" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="{{ $option->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ $option->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="home/assets/js/main.js"></script>
    @include('sweetalert::alert')
</body>

</html>