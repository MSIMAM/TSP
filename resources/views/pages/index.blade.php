<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('styles/assets/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('styles/assets/maincss/css/bootstrap.min.css')}}">
  {{-- <link href="{{ asset('styles/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
  <link href="{{ asset('styles/assets/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles/boxicons/css/boxicons.min.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{ asset('styles/assets/maincss/style.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/assets/maincss/css/vendorStyle.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/assets/maincss/demo.css')}}" rel="stylesheet">
  <link href="{{ asset('styles/assets/maincss/core.css')}}" rel="stylesheet">
</head>

<body>
 {{--============== include header =============--}}
 @include('includes.header2')
 {{--==============end include header =============--}}
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Welcome To Tidjaniya Sufi Path</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Lailahailla, allah is our pride</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="video.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lectures</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt=""> -->
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <p>
                We Are Student Seeking Knowledge And Trying To Contribute In The Journey Of Tharikha Tijjaniyyah.
              </p>
              <div class="text-center text-lg-start">
                <a href="#hero" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('styles/assets/img/abouts.jpg')}}" class="img-fluid rounded" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients bg-light">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('styles/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->


<!-- ======= pillars of islam Section ======= -->
    <header class="section-header">
      <h2>Pillars Of Islam</h2>
      <span>(Ethical And Moral Beliefs That Guide To Straith Path)</span>
    </header>
<section id="pillars" class="pillars">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div id="carouselId" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <div class="row">
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-img">
                        <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Profession of Faith (shahada). </a></h5>
                        <p class="card-text">The belief that "There is no god but Allah, and Muhammad is the Messenger of Allah" is central to Islam. This phrase, written in Arabic, is often prominently featured in architecture and a range of objects, including the Qur'an, Islam's holy book of divine revelations. One becomes a Muslim by reciting this phrase with conviction.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-img">
                        <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Prayer (salat).</a></h5>
                        <p class="card-text">
                         Muslims pray facing Mecca five times a day: at dawn, noon, mid-afternoon, sunset, and after dark. Prayer includes a recitation of the opening chapter (sura) of the Qur'an, and is sometimes performed on a small rug or mat used expressly . Muslims can pray individually at any location or together in a mosque, where a leader in prayer (imam) guides the congregation.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-img">
                        <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Alms (zakat).</a></h5>
                        <p class="card-text">
                          In accordance with Islamic law, Muslims donate a fixed portion of their income to community members in need. Many rulers and wealthy Muslims build mosques, drinking fountains, hospitals, schools, and other institutions both as a religious duty and to secure the blessings associated with charity.
                        </p>
                      </div>
                    </div>
                  </div>
              </div>

          </div>
          <div class="carousel-item">
              <div class="row">
                <div class="col-md-4 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Alms (zakat).</a></h5>
                        <p class="card-text">
                          In accordance with Islamic law, Muslims donate a fixed portion of their income to community members in need. Many rulers and wealthy Muslims build mosques, drinking fountains, hospitals, schools, and other institutions both as a religious duty and to secure the blessings associated with charity.
                        </p>
                    </div>
                  </div>
                </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-img">
                        <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Fasting (sawm).</a></h5>
                        <p class="card-text">
                         During the daylight hours of Ramadan, the ninth month of the Islamic calendar, all healthy adult Muslims are required to abstain from food and drink. Through this temporary deprivation, they renew their awareness of and gratitude for everything God has provided in their lives—including the Qur'an, which was first revealed during this month.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                      <div class="card-img">
                        <img src="{{ asset('styles/assets/img/shtijjani.jpg')}}" alt="...">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Pilgrimage (hajj).</a></h5>
                        <p class="card-text">Every Muslim whose health and finances permit it must make at least one visit to the holy city of Mecca, in present-day Saudi Arabia. The Ka'aba, a cubical structure covered in black embroidered hangings, is at the center of the Haram Mosque in Mecca. Since the time of the Prophet Muhammad, believers from all over the world have gathered around the Ka'ba in Mecca on the eighth and twelfth days of the final month of the Islamic calendar.</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

  </div>
</section><!-- End pillars Section -->

<!-- ======= Muqamm Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-header">
      <h2>Levels Of Faith</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-book-open"></i></div>
          <h4><a href="">Islam</a></h4>
          <p>The first level is Islam. A Muslim must be declared that there is no God but Allah and Muhammad (SAW) is the messenger of Allah (SWT). By declaring this a person accepts the message of Allah Almighty that is revealed to humanity through the last prophet Muhammad (SAW).</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"  data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-moon"></i></div>
          <h4><a href="">Imaan</a></h4>
          <p>Iman or faith is the first thing that we have to learn in our religion because it acts as our roots. Iman is basically to believe in Allah, His Angels, His Books, His Messengers and all the scriptures which He sent down before.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-star"></i></div>
          <h4><a href="">Ihsan</a></h4>
          <p>Ihsan is the highest status of religion Islam. Its definition that our beloved Prophet Muhammad (SAW) described is: “To worship Allah as if you see Him, and if you do not see Him, He sees you.”</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End pillars Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>OUR SCHOLLARS</h2>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Shaykhs</li>
              <li data-filter=".filter-card">Muqaddam</li>
              <!-- <li data-filter=".filter-web">Murids</li> -->
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Ahmad Tijjani</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sheikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Ahmad Tijjani</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sheikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Ahmad Abulfathi</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sheikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Thahir Uthman Bauchi</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/portfolio/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sheikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Umar Tal</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Shaikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sheikh Gibrima</h4>
                <p>(R.T.A)</p>
                <div class="portfolio-links">
                  <a href="{{ asset('styles/assets/img/schollars/abouts.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sheikh"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>QOUTES</h2>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  First I Pray for wealth later i realised that it does not last. Then I asked for mercy. But realised that also does'nt last. I concluded that if a person would remain free of wants and needs he should ask only for allah him self.
                   May Allah give us Allah , Anything Else that He gives other than himself will come to pass. And as his vicegerents, we are bound to always be in need of Him, May Allah give us Allah.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('styles/assets/img/qoutes/book.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sheikh Ibrahim Niasse R.A</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Never be arrogant or be jealous nor do eye services but to your Lord heed.
                  And arrogance arises because either because of Knowledge, lineage or companionship or getting involved in acts of devotions and wealth.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('styles/assets/img/qoutes/book.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sheikh Ibrahim Niasse R.A</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Teach your wives and your children that loving the neighbours, the members of the community and living peacefully with the creation is greater worship.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('styles/assets/img/qoutes/book.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sheikh Ibrahim Niasse R.A</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Everything you desire exists with allah -- so if you have Allah you have everything you desire. If you don't have Allah, then nothing you desire will make you happy
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('styles/assets/img/qoutes/book.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sheikh Ibrahim Niasse R.A</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The (Prophet) who eradicate the darkness of polytheism is enough eradicator of my worries.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <div class="profile mt-auto">
                  <img src="{{ asset('styles/assets/img/qoutes/book.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sheikh Ibrahim Niasse R.A</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>MEMBERS</h2>
          <p>Our hard working members</p>
        </header>

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('styles/assets/img/team/inyass.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Najibu M Khalipha</h4>
                <span>Lorem Ipsum</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('styles/assets/img/team/inyass.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abdullahi M Khalipha</h4>
                <span>Lorem Ipsum</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('styles/assets/img/team/inyass.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mubarak S Imam</h4>
                <span>Lorem Ipsum</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('styles/assets/img/team/inyass.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Naziru M Mukhtar</h4>
                <span>Lorem Ipsum</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Provide Your Email Address And Tap Subscribe To Stay Connected.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Tidjaniya</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-telegram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Our Schollars</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#team">Members</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="blog.php">News</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Mission</h4>
            <p>Our Mission is to enlighten the whole muslim ummah on what's the true mean of tharikha tijjaniyya. </p>
            <p>Unite the muslim ummah to go on the complete teachings of the qur'an and sunnah</p>
            <p>Inspire the youth to know the important of seeking heart rehabilitation education</p>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Yalaguruza Dangusau Street <br>
              Gombe,<br>
              Gombe State. <br><br>
              <strong>Phone:</strong> +234 9048973194<br>
              <strong>Email:</strong> infotyma@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tijjaniyya Youth Movement Awareness</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Powered by <a href="https://upstart/">Upstart Technology</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('styles/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('styles/aos/aos.js')}}"></script>
  <script src="{{ asset('styles/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('styles/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('styles/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('styles/swiper/swiper-bundle.min.js')}}"></script>
  {{-- <script src="{{ asset('styles/assets/php-email-form/validate.js')}}"></script> --}}
  <script src="{{ asset('styles/jquery/jquery.slim.min.js')}}"></script>
  <script src="{{ asset('styles/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('styles/assets/js/bootstrap.min.js')}}"></script>

  <!-- Website Main JS File -->
  <script src="{{ asset('styles/assets/mainjs/main.js')}}"></script>

</body>

</html>
