<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <title>Military Students</title>

  <!-- Bootstrap core CSS -->
  <link href="CSS/bootstrap.min.css" rel="stylesheet">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="CSS/fontawesome.css">
  <link rel="stylesheet" href="CSS/sty.css">
  <link rel="stylesheet" href="CSS/owl.css">
  <link rel="stylesheet" href="CSS/lightbox.css">
  
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>
<style>
  .news-slider .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  .news-slider .news-content {
    max-width: 600px;
  }
  .news-slider h4 {
    font-size: 1.8rem;
    color: #333;
  }
  .news-slider p {
    color: #666;
  }
  .news-slider .news-image img {
    width: 100%;
    border-radius: 10px;
  }
</style>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <img src="img/logo-bg.png" alt="">
      <a href="#"> Military Students<em> PTC</em></a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">หน้าหลัก</a></li>
        <li class=""><a href="<?php echo base_url(''); ?>login">เกี่ยวกับเรา</a>
          <ul class="sub-menu">
            <li><a href="#">วิสัยทัศน์</a></li>
            <li><a href="#">What we do?</a></li>
            <li><a href="#">How it works?</a></li>
            <li><a href="#" rel="sponsored" class="external">External URL</a></li>
          </ul>
        </li>
        <!-- <li><a href="<?php echo base_url(''); ?>login">LOG IN</a></li> -->
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="<?php echo base_url(''); ?>userprofile" class="external">ข้อมูลส่วนตัว</a></li>
        <li>
          <a href="<?php echo base_url('auth/logout'); ?>" class="external">
            <i class="fas fa-sign-out-alt"></i> LOG OUT
          </a>
        </li>

      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="img/Military Students PTC.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Welcome to Military Students</h6>
        <h2><em>ยินดีต้อนรับ</em> สู่ Military Students</h2>
        <div class="main-button">
          <div class="scroll-to-section"><a href="#section2">ดูรายละเอียดเลย</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="features-post">
              <div class="features-content">
                <div class="content-show">
                  <h4><i class="fas fa-bullhorn"></i>สมัคร รด.ปี 68</h4>
                </div>
                <div class="content-hide">
                  <p>การเรียนรักษาดินแดนของมหาวิทยาลัย จะครอบคลุมทั้งนักศึกษาชายและหญิงที่จะสมัครใหม่หรือที่เรียนมาและ แล้วต้องการเรียนต่อเนื่องจนจบหลักสูตรการฝึกรักษาดินแดนเพื่อปลดเป็นทหารกองประจําการ.</p>
                  <p class="hidden-sm"> และแต่งตั้งยศเป็นสิบเอกหรือว่าที่ร้อยตรี โดยเตรียมเอกสารในการสมัครหรือรายงานตัวให้ครบ เพื่อยื่นให้แผนกบริการและสวัสดิการนักศึกษาต่อไป การสมัครเรียนรักษาดินแดนของมหาวิทยาลัย จะเริ่มในช่วงลงทะเบียนนักศึกษาใหม่ โดยนักศึกษาที่มีความประสงค์จะเรียนรักษาดินแดนจะต้อง เตรียมหลักฐานสําหรับสมัครเรียน.</p>
                  <div class="external"><a href="<?php echo base_url(''); ?>prefer">สมัครเลย</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="features-post second-features">
              <div class="features-content">
                <div class="content-show">
                  <h4><i class="fas fa-bullhorn"></i>การเกณฑ์ทหาร</h4>
                </div>
                <div class="content-hide">
                  <p>ตามกฎหมาย พ.ร.บ. รับราชการทหาร พ.ศ. 2497 กำหนดให้ชายไทยต้องเข้ารับราชการทหารทุกคน โดยชายไทยทุกคนต้องเข้าใจหน้าที่การลงบัญชีทหารกองเกิน.</p>
                  <p class="hidden-sm">การรับหมายเรียก การตรวจเลือกคนเข้ากองประจำการ การเรียกพล การระดมพล และการปลดชายไทย ซึ่งคุณสามารถศึกษาเพิ่มเติมได้จากเว็บไซต์กระทรวงกลาโหม.</p>
                  <div class="scroll-to-section"><a href="<?php echo base_url('prefer'); ?>">รายละเอียด</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="features-post third-features">
              <div class="features-content">
                <div class="content-show">
                  <h4><i class="fas fa-bullhorn"></i>การผ่อนผันการเกณฑ์ทหาร</h4>
                </div>
                <div class="content-hide">
                  <p>สำนักงานกิจการนักศึกษา ให้บริการนักศึกษาของมหาวิทยาลัยที่มีอายุครบ 20 ปีบริบูรณ์ ในการขอผ่อนผันการเข้ารับราชการทหารกองประจำการ ตามพระราชบัญญัติการรับราชการทหาร พ.ศ.2497 มาตรา 29(3) และกฏกระทรวงกลาโหม</p>
                  <p class="hidden-sm">การผ่อนผันเข้ารับราชการทหารเป็นทหารกองประจำการแก่บุคคลซึ่งอยู่ระหว่างการเรียนรู้ พ.ศ. 2549 ข้อ 2 บุคคลซึ่งจะได้รับการผ่อนผันตามมาตรา 29(3) คือ (1) การศึกษาในระบบตามกฏหมายว่าด้วยการศึกษาแห่งชาติ.</p>
                  <div class="external"><a href="<?php echo base_url('deferment');?>">รายละเอียด </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section why-us" data-section="section2">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div id='tabs'>
              <h4> HOT NEWS / ข่าวประชาสัมพันธ์</h4>
              <section class='tabs-content'>

                <article id="tabs-1">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="img/Bannerkoddee.jpg" alt="Banner กิจกรรม">
                    </div>
                    <div class="col-md-5">
                      <h4>เติมคนดีครั้งยิ่งใหญ่</h4>
                      <div class="main-button">
                        <div class="external">
                          <a href="<?php echo base_url('subject_register/index') ?>">เข้าร่วมกิจกรรมเลย</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
                <br>
                <article id="tabs-2">
                  <div class="row">
                    <div class="col-md-7">
                      <img src="img/photo-Banner.png" alt="ภาพกิจกรรม">
                    </div>
                    <div class="col-md-5">
                      <h4>รูปภาพกิจกรรมต่างๆ</h4>
                      <div class="main-button">

                        <div class="external"><a href="<?php echo base_url('gallery'); ?>">ดูรูปเลย</a></div>

                      </div>
                    </div>
                  </div>
                </article>

              </section>

            </div>
          </div>
        </div>
      </div>
    </section>



    <svg hidden="hidden">
      <defs>
        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
          <title>arrow-left</title>
          <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
        </symbol>
        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
          <title>arrow-right</title>
          <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
        </symbol>
      </defs>
    </svg>


    <div class="col-md-12">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <div class="left-content">
                  <span>Presentation for You</span>
                  <h4>Learn More About <em>Grad School</em></h4>
                  <p>
                    This template is free to use for personal or commercial projects.
                    However, redistribution is not allowed.
                    <br><br>
                    Contact <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">TemplateMo</a> for more details.
                  </p>
                  <div class="main-button">
                    <a href="https://fb.com/templatemo" target="_parent">More Info</a>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <article class="video-item">
                  <div class="video-caption">
                    <h4>Introduction to Grad School</h4>
                  </div>
                  <figure>
                    <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play">
                      <img src="img/main-thumb.png" alt="Video Thumbnail">
                    </a>
                  </figure>
                </article>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <div class="left-content">
                  <span>Discover More</span>
                  <h4>Enhance Your <em>Skills</em></h4>
                  <p>
                    Learn from the best experts in the industry and boost your career.
                    <br><br>
                    Stay updated with the latest trends and techniques.
                  </p>
                  <div class="main-button">
                    <a href="https://example.com" target="_parent">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <article class="video-item">
                  <div class="video-caption">
                    <h4>Master New Techniques</h4>
                  </div>
                  <figure>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="play">
                      <img src="img/video-thumb2.png" alt="Video Thumbnail">
                    </a>
                  </figure>
                </article>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <div class="left-content">
                  <span>Join Us Today</span>
                  <h4>Unlock Your <em>Potential</em></h4>
                  <p>
                    Take the next step in your journey and achieve greatness.
                    <br><br>
                    Sign up now and start learning.
                  </p>
                  <div class="main-button">
                    <a href="https://example.com/signup" target="_parent">Sign Up</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <article class="video-item">
                  <div class="video-caption">
                    <h4>Success Stories</h4>
                  </div>
                  <figure>
                    <a href="https://www.youtube.com/watch?v=3JZ_D3ELwOQ" class="play">
                      <img src="img/video-thumb3.png" alt="Video Thumbnail">
                    </a>
                  </figure>
                </article>
              </div>
            </div>
          </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>


  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">


          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="team" class="team section py-5">
    <div class="container text-center mb-4" data-aos="fade-up">
        <h2 class="fw-bold">ครูที่ปรีกษา</h2>
        <p class="text-muted">Military Students.</p>
    </div>

    <div class="container">
        <div class="row gy-4 justify-content-center">

            

            <!-- Team Member 3 -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member shadow-sm p-4 text-center">
                    <img src="img/team-3.jpg" class="img-fluid rounded-circle mb-3" alt="William Anderson">
                    <h4 class="fw-semibold">นายสิงหา วัฒนเสาวลักษณ์</h4>
                    <span class="text-muted">หัวหน้างาน</span>
                    <div class="social mt-3">
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="member shadow-sm p-4 text-center">
                    <img src="img/team-4.jpg" class="img-fluid rounded-circle mb-3" alt="Amanda Jepson">
                    <h4 class="fw-semibold">Amanda Jepson</h4>
                    <span class="text-muted">Accountant</span>
                    <div class="social mt-3">
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm mx-1"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Military Students PTC


        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/impact.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/video.js"></script>
  <script src="js/slick-slider.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
 
 <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      loop: true,
    });
  </script>
  <script>
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>