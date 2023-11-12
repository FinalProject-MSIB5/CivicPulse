@extends('Landingpage.index')
@section('content')
     <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
              <div>
                <h1>Pengaduan Masyarakat</h1>
                <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
                {{-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a> --}}
                {{-- <a href="#" type="button" class="btn btn-secondary">Yuk Login</button></a> --}}
                {{-- <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> --}}
              </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
              <img src="{{asset('Landingpage/assets/img/hero-bg.png')}}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
       <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Mekanisme Penggunaan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>1</h4>
                  <p>Pelapor menyampaikan pengaduan melalui website pengaduan masyarakat.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>2</h4>
                  <p>Melakukan laporan pengaduan yang lengkap, jelas dan relevan.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>3</h4>
                  <p>Admin melakukan verifikasi laporan pengaduan, apakah laporan tersebut valid atau tidak.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>4</h4>
                  <p>Menindak lanjuti laporan pengaduan yang telah valid.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('Landingpage/assets/img/3.png')}}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>

      <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('Landingpage/assets/img/testimonials/Hadi.jpg')}}" class="testimonial-img" alt="">
                <h3>Hadi Prasetyo</h3>
                <h4>Ketua Kelompok</h4>
                <h4>Database &amp; Projek Manajer</h4>
                <p>
                  Asal Kampus : Universitas Mulawarman <br>
                  Program Studi : Sistem Informasi
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('Landingpage/assets/img/testimonials/euis.jpg')}}" class="testimonial-img" alt="">
                <h3>Euis Safania</h3>
                <h4>Back End &amp; UI/UX</h4>
                <p>
                  Asal Kampus : Universitas Negeri Semarang <br>
                  Program Studi : Teknik Informatika
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('Landingpage/assets/img/testimonials/me.png')}}" class="testimonial-img" alt="">
                <h3>Zian Naisila A</h3>
                <h4>Front End &amp; Document</h4>
                <p>
                  Asal Kampus : STMIK - IM Bandung<br>
                  Program Studi : Sistem Informasi
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('Landingpage/assets/img/testimonials/egy.jpeg')}}" class="testimonial-img" alt="">
                <h3>Riski Eggy Saputro</h3>
                <h4>UI/UX</h4>
                <p>
                  Asal Kampus : Universitas Banten Jaya <br>
                  Program Studi : Teknik Informatika
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End App Features Section -->

      @endsection