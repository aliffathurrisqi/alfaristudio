<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alfari Studio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('landing-index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo.png') }}" class="w-75" alt="alfaristudio">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li> --}}
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          {{-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
          <li><a class="getstarted scrollto" href="#about">Dapatkan Sekarang</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Jasa Freelance Web Developer & Graphics Designer</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Selalu siap melayani kebutuhan Anda, kepuasan customer adalah tanggung jawab kami</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Dapatkan Sekarang</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('img/hero-img.png') }}" class="img-fluid">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->

    <!-- ======= Values Section ======= -->

    <!-- ======= Counts Section ======= -->

    <!-- ======= Features Section ======= -->

        <!-- Feature Icons -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Layanan yang bisa kami bantu</p>
        </header>

        <div class="row gy-4 justify-content-center">

        @foreach ($services as $item)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="{{ $item->icon }} icon p-3"></i>
              <h3>{{ $item->name }}</h3>
              <p>{{ $item->description }}</p>
              {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
            </div>
          </div>
        @endforeach

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4 justify-content-center" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="{{ asset('img/pricing-free.png') }}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="{{ asset('img/pricing-starter.png') }}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="{{ asset('img/pricing-business.png') }}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="{{ asset('img/pricing-ultimate.png') }}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section> --}}
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->

    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Testimonials Section ======= -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Team</h2>
            <p>Perkenalkan tim hebat kami</p>
          </header>

          <div class="row gy-4 justify-content-center">

            @foreach ($teams as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('img/team/'.$item->image.'') }}" class="img-fluid">
                  <div class="social">
                    @if ($item->github)
                        <a href="{{ $item->github }}" target="_black"><i class="bi bi-github"></i></a>
                    @endif
                    @if ($item->linkedin)
                        <a href="{{ $item->linkedin }}" target="_black"><i class="bi bi-linkedin"></i></a>
                    @endif
                    @if ($item->twitter)
                        <a href="{{ $item->twitter }}" target="_black"><i class="bi bi-twitter"></i></a>
                    @endif
                    @if ($item->facebook)
                        <a href="{{ $item->facebook }}" target="_black"><i class="bi bi-facebook"></i></a>
                    @endif
                    @if ($item->instagram)
                        <a href="{{ $item->instagram }}" target="_black"><i class="bi bi-twitter"></i></a>
                    @endif
                    @if ($item->whatsapp)
                        <a href="https://wa.me/{{ $item->whatsapp }}" target="_black"><i class="bi bi-whatsapp"></i></a>
                    @endif
                    @if ($item->website)
                        <a href="{{ $item->website }}" target="_black"><i class="bi bi-globe"></i></a>
                    @endif

                  </div>
                </div>
                <div class="member-info">
                  <h4>{{ $item->name }}</h4>
                  <span>{{ $item->position }}</span>
                  <p>{{ $item->description }}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>

        </div>

      </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->

    <!-- ======= Recent Blog Posts Section ======= -->

    <!-- ======= Contact Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{ route('landing-index') }}" class="logo d-flex align-items-center">
              <img src="{{ asset('img/logo.png') }}" alt="alfaristudio">
            </a>
            <p style="text-align: justify;">{{ $company->description }}</p>
            <div class="social-links mt-3">
            @if ($company->twitter)
                <a href="{{ $company->twitter }}" target="_black"><i class="bi bi-twitter"></i></a>
            @endif
            @if ($company->facebook)
                <a href="{{ $company->facebook }}" target="_black"><i class="bi bi-facebook"></i></a>
            @endif
            @if ($company->instagram)
                <a href="{{ $company->instagram }}" target="_black"><i class="bi bi-instagram"></i></a>
            @endif
            </div>
          </div>

          {{-- <div class="col-lg-2 col-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            @foreach ($services as $item)
              <li><i class="bi bi-chevron-right"></i> <a>{{ $item->name }}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p style="text-align: justify;">
                {{ $company->address }}
              <br><br>
              <strong>Phone:</strong> {{ $company->phone }}<br>
              <strong>Email:</strong> {{ $company->email }}<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ $company->name }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> & redesign by <a href="/">Alfari Studio</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
