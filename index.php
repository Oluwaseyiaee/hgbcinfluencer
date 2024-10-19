<?php
$title = "Home | Higher Ground Baptist Church";
include('template/header.php');
?>

<!-- Hero Section Start -->
<div class="hero-slider">
  <div class="hero-slides">
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/showcase.jpg');
          ">
      <div class="hero-content-box">
        <h1>HGBC <br />Influencers</h1>
        <p class="">
          Welcome to the City of Refuge, The Court of Kings and Queens. It
          is an honour to have you visit our page. Have a wonderful time
          exploring!
        </p>
        <a href="#" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/commitment.jpg');
          ">
      <div class="hero-content-box">
        <h1 class="">Commitment</h1>
        <p class="">
          We are people of dedication and professional reliability. We are
          committed to God so our plans can be established (Proverbs 16:3).
        </p>
        <a href="" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/holiness.jpg');
          ">
      <div class="hero-content-box">
        <h1 class="">Holiness</h1>
        <p class="">
          Just as we were commanded by God (Leviticus 19:2), we are holy
          people for He who called us is holy.
        </p>
        <a href="#" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/excellence.jpg');
          ">
      <div class="hero-content-box">
        <h1 class="">Excellence</h1>
        <p class="">
          We strive to do the best we can. Our maker is an outstandingly
          supreme being, so, we strive to be like Him with the gift of the
          Holy Spirit.
        </p>
        <a href="#" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/love.jpg');
          ">
      <div class="hero-content-box">
        <h1 class="">Love</h1>
        <p class="">
          As stated in the Scripture, God is Love and whoever abides in love
          abides in God. We are loving people for we know our God and we
          abide in Him.
        </p>
        <a href="#" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
    <div class="slider-items" style="
            background-image: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)
              ),
              url('assets/img/bg/integrity.jpg');
          ">
      <div class="hero-content-box">
        <h1 class="">Integrity</h1>
        <p class="">
          Being uncompromisingly just and abiding by strong moral
          principles? Yes! That's what we are.
        </p>
        <a href="#" target="_self">
          <button type="button" class="btn-one mt-5">Know More</button>
        </a>
      </div>
    </div>
  </div>

  <div class="controls">
    <button class="control prev">&lt;</button>
    <button class="control next">&gt;</button>
  </div>
</div>

<script>
  const slidesContainer = document.querySelector(".hero-slides");
  const slides = document.querySelectorAll(".slider-items");
  const prev = document.querySelector(".prev");
  const next = document.querySelector(".next");
  let currentIndex = 1;
  let isTransitioning = false;

  // Clone the first and last slides
  const firstSlideClone = slides[0].cloneNode(true);
  const lastSlideClone = slides[slides.length - 1].cloneNode(true);

  // Append the cloned slides
  slidesContainer.appendChild(firstSlideClone);
  slidesContainer.insertBefore(lastSlideClone, slidesContainer.firstChild);

  // Update the total number of slides
  const totalSlides = slides.length + 2;

  // Set the initial position to the first real slide
  slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;

  function showSlide(index) {
    if (isTransitioning) return;
    isTransitioning = true;
    slidesContainer.style.transition = "transform 0.5s ease-in-out";
    slidesContainer.style.transform = `translateX(-${index * 100}%)`;

    slidesContainer.addEventListener("transitionend", () => {
      if (currentIndex === 0) {
        // Jump to the last real slide without transition
        slidesContainer.style.transition = "none";
        currentIndex = totalSlides - 2;
        slidesContainer.style.transform = `translateX(-${
              currentIndex * 100
            }%)`;
      } else if (currentIndex === totalSlides - 1) {
        // Jump to the first real slide without transition
        slidesContainer.style.transition = "none";
        currentIndex = 1;
        slidesContainer.style.transform = `translateX(-${
              currentIndex * 100
            }%)`;
      }
      isTransitioning = false;
    });
  }

  next.addEventListener("click", () => {
    if (isTransitioning) return;
    currentIndex++;
    showSlide(currentIndex);
  });

  prev.addEventListener("click", () => {
    if (isTransitioning) return;
    currentIndex--;
    showSlide(currentIndex);
  });

  // Auto-slide functionality
  setInterval(() => {
    currentIndex++;
    showSlide(currentIndex);
  }, 5000); // Change every 5 seconds
</script>
<!-- Hero SEction End -->

<!-- Theme of the year Area Start -->
<style>
  .year_theme {
    display: flex;
    align-items: center;
    background-color: #f8f9fa;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    padding: 60px;
    margin: 20px 0;
    flex-wrap: wrap;
    /* Allow wrapping on smaller screens */
  }

  .year_theme_left {
    font-size: 100px;
    color: var(--primary-color-1);
    margin-right: 40px;
    flex-shrink: 0;
    /* Prevent the left content from shrinking */
  }

  .year_theme_right h1 {
    font-size: 40px;
    color: #333;
    margin-bottom: 10px;
  }

  .year_theme_right p {
    font-size: 16px;
    color: #666;
  }

  .year_theme_right span a {
    color: var(--primary-color-1);
    font-weight: bold;
    text-decoration: none;
  }

  .year_theme_right span a:hover {
    text-decoration: underline;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .year_theme {
      padding: 40px;
      flex-direction: column;
      text-align: center;
    }

    .year_theme_left {
      font-size: 60px;
      margin-right: 0;
      margin-bottom: 20px;
    }

    .year_theme_right h1 {
      font-size: 30px;
    }

    .year_theme_right p {
      font-size: 14px;
    }
  }

  @media (max-width: 480px) {
    .year_theme {
      padding: 20px;
    }

    .year_theme_left {
      font-size: 40px;
    }

    .year_theme_right h1 {
      font-size: 24px;
    }

    .year_theme_right p {
      font-size: 12px;
    }
  }
</style>


<div style="padding: 50px 0px 0px 0px">
  <div class="container custom__container">
    <div class="year_theme" data-aos="fade-up" data-aos-duration="1000">
      <div class="year_theme_left">
        <i class="fas fa-exclamation-circle"></i>
      </div>
      <div class="year_theme_right">
        <h1>2024, Amazing Light</h1>
        <p>
          Our word for the year in HIgher Ground Baptist Church is “Amazing
          Light”. <span><a href="">Click here</a></span> to listen and
          download
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Theme of the year Area End -->

<!-- Core Value, Vsion and Mission Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>What Keeps us Standing?</h2>
          <p>
            The love of God and the gift of the Spirit of God keep us
            standing.
          </p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center gy-4">
      <div class="col-xl-6 justify-content-center align-items-center" data-aos="fade-right" data-aos-duration="1000">
        <img src="assets/img/missionVision/CHELI-5.png" alt="image" style="width: 80%" />
      </div>
      <div class="col-xl-6" data-aos="fade-left" data-aos-duration="1000">
        <img src="assets/img/missionVision/website.png" alt="image" style="width: 80%" />
      </div>
    </div>
  </div>
</div>
<!-- Core Value, Mision and Mission End -->

<!-- Latest Sermon Area Start -->
<div class="latest_sermon section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>Latest Sermon</h2>
          <p>Stay current with our latest sermons and messages.</p>
        </div>
      </div>
    </div>
    <div class="latest_sermon-slider swiper py-5">
      <div class="swiper-wrapper latest-sermon-items align-items-center" data-aos="fade-up" data-aos-duration="2000">
        <div class="swiper-slide latest_sermon-single-latest-sermon single-latest-sermon">
          <img src="assets/img/sermon/image-3.jpg" alt="image" />
          <div class="latest_sermon-single-latest-sermon-content">
            <a href="">
              <h4>Month of Beauty and Honor</h4>
            </a>
            <span>Uplifting Hour</span>
          </div>
        </div>
        <div class="swiper-slide latest_sermon-single-latest-sermon single-latest-sermon">
          <img src="assets/img/sermon/image-2.jpg" alt="image" />
          <div class="latest_sermon-single-latest-sermon-content">
            <a href="">
              <h4>Secret to a Fruitful Ministry</h4>
            </a>
            <span>Church Pastor's Induction</span>
          </div>
        </div>

        <div class="swiper-slide latest_sermon-single-latest-sermon single-latest-sermon">
          <img src="assets/img/sermon/image-1.jpg" alt="image" />
          <div class="latest_sermon-single-latest-sermon-content">
            <a href="">
              <h4>Faith for Rest (I)</h4>
            </a>
            <span>2024 Alumni Thanksgiving</span>
          </div>
        </div>

        <div class="swiper-slide latest_sermon-single-latest-sermon active single-latest-sermon">
          <img src="assets/img/sermon/image-1.jpg" alt="image" />
          <div class="latest_sermon-single-latest-sermon-content">
            <a href="">
              <h4>Faith for Rest (II)</h4>
            </a>
            <span>2024 Alumni Thanksgiving</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Latest Sermon Area End -->

<style>
  .event-slider {
    border-radius: 20px;
    max-width: 700px;
    overflow: hidden;
  }

  .event-slider-container {
    display: flex;
    transition: transform 0.5s ease;
    /* Smooth transition */
    width: 100%;
    /* Ensure container takes the full width of the slider */
  }

  .event-slider img {
    border-radius: 20px;
    width: 100%;
    /* Ensure images take up the full width of the slider */
    flex-shrink: 0;
    /* Prevent images from shrinking */
  }
</style>

<!-- Upcoming Events Area Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>Upcoming Events</h2>
          <p>Save these dates and set your reminders!</p>
        </div>
      </div>
    </div>

    <div class="row gy-4 align-items-center justify-content-center">
      <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="work-process-area__one-single-work" data-aos="fade-right" data-aos-duration="100">
          <span>AUG <br />20</span>
          <div class="work-process-area__one-single-work-content">
            <h4>Leaders Retreat</h4>
            <p>
              An opportunity to gather the church's leaders for duty checks,
              personal development checks and spiritual development
              evaluation.
            </p>
          </div>
        </div>

        <div class="work-process-area__one-single-work" data-aos="fade-right" data-aos-duration="1300">
          <span>SEP <br />31</span>
          <div class="work-process-area__one-single-work-content">
            <h4>GLS 2024 - GLobal Leadership Summit</h4>
            <p>
              The Global Leadership Summit (GLS) is an annual event by the
              Global Leadership Network that equips leaders to inspire
              change in their communities. It reaches over 120 countries and
              offers year-round resources to support leaders in ministry,
              business, and beyond.
            </p>
          </div>
        </div>

        <div class="work-process-area__one-single-work" data-aos="fade-right" data-aos-duration="1600">
          <span>NOV<br />7</span>
          <div class="work-process-area__one-single-work-content">
            <h4>BISUM 2024 - Business and Investment Summit</h4>
            <p>
              Business and Investment Summit is an interdenominational
              yearly event aimed at raising leaders with influence in all
              spheres of life.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-10 event-slider" data-aos="fade-left" data-aos-duration="1000">
        <div class="about__one-image">
          <div class="about__one-image-wrapper">
            <img src="assets/img/event/photizo.jpg" alt="" class="image-1" />
            <img src="assets/img/event/thanksgiving.jpg" style="max-width: 400px" alt="" class="image-2" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Work process Area End -->

<!-- Word of the Day Area Start -->
<div class="quote section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>Word of the Day</h2>
          <p>Start your day with these enlightening words.</p>
        </div>
      </div>
    </div>
    <div class="quote-slider swiper py-5">
      <div class="swiper-wrapper quote-items align-items-center">
        <div class="swiper-slide">
          <img src="assets/img/quote/image-1.jpg" alt="image" class="image-to-download" />
          <div class="quote-btn-box">
            <a href="assets/img/quote/image-1.jpg" class="download-link">
              <i class="fa fa-download quote-btn"></i>
            </a>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="assets/img/quote/image-3.jpg" alt="image" class="image-to-download" />
          <div class="quote-btn-box">
            <a href="assets/img/quote/image-2.jpg" class="download-link">
              <i class="fa fa-download quote-btn"></i>
            </a>
          </div>
        </div>

        <div class="swiper-slide">
          <img src="assets/img/quote/image-3.jpg" alt="image" class="image-to-download" />
          <div class="quote-btn-box">
            <a href="assets/img/quote/image-3.jpg" class="download-link">
              <i class="fa fa-download quote-btn"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Word of the Day Area End -->

<!-- Giving Area Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <div class="row align-items-center flex-wrap-reverse gy-4">
      <div class="col-xl-6 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
        <div class="about__one-image">
          <div class="about__one-image-wrapper">
            <img src="assets/img/event/photizo.jpg" alt="" class="image-1" />
            <img src="assets/img/give/image-2.jpg" style="max-width: 300px" alt="" class="image-2" />
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-7 col-md-9" data-aos="fade-up" data-aos-duration="1000">
        <div class="about__one-content">
          <span class="subtitle-one">Giving</span>
          <h2>Put your Money where your Faith is.</h2>
          <p>
            Our giving to God is our act of love and Appriciate to him. We
            believe that our faith is reflected in our actions, including
            our generosity. By giving financially, we demonstrate our trust
            in God's provision and our commitment to advancing His kingdom.
          </p>
          <p>
            "For where your treasure is, there your heart will be also."
            <span style="font-weight: bold">- Matthew 6:21</span>
          </p>
          <a href="give.php" class="btn-one">Give Now </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Giving Area End -->

<!-- Contact Two Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <div class="row gy-5 align-items-center">
      <!-- Form Column -->
      <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="contact__two-content">
          <div class="contact__two-title mb-4">
            <span class="subtitle-one">Contact us</span>
            <h2>We would Love to hear from you.</h2>
          </div>
          <div class="contact__two-form">
            <form action="template/send-email.php" method="post">
              <div class="row gy-4 mb-4">
                <div class="col-md-6">
                  <input type="text" placeholder="Your Name" name="name" id="name" class="form-control" />
                </div>
                <div class="col-md-6">
                  <input type="email" placeholder="Your E-mail" name="email" id="email" class="form-control" />
                </div>
                <div class="col-md-6">
                  <input type="tel" placeholder="Phone Number" name="phonenumber" id="phonenumber" class="form-control" />
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Subject" name="subject" id="subject" class="form-control" />
                </div>
              </div>
              <!-- Fixed the name and id attributes here -->
              <textarea placeholder="Your Message" name="message" id="message" class="form-control mb-4"></textarea>
              <button type="submit" class="btn-one">Submit Now</button>
            </form>

          </div>
        </div>
      </div>

      <!-- Image Column -->
      <div class="col-xl-6" data-aos="fade-left" data-aos-duration="1000">
        <div class="contact__two-contact-info">
          <img src="assets/img/event/contact-us.jpg" alt="Contact Us" class="img-fluid rounded shadow-lg mx-auto"
            style="max-width: 80%; height: auto" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Two End -->

<!-- HGBC Location Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>Find us Here</h2>
          <p>
            Check out our locations, get to choose your preferred site for
            worship.
          </p>
        </div>
      </div>
    </div>
    <h3 class="my-4">
      We're small enough to reach you and big enough to accommodate you.
    </h3>

    <!-- Full-width Map -->
    <div class="row">
      <div class="col-12" data-aos="fade-down" data-aos-duration="1000">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.7226045527757!2d4.264685797732026!3d8.164173505962271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10370da637004d75%3A0xcba433a8c5a10ad5!2sHigher%20Ground%20Baptist%20Church!5e0!3m2!1sen!2sng!4v1708510731262!5m2!1sen!2sng"
          width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- HGBC Location End -->

<!-- TBC Location Start -->
<div class="all_section section-padding">
  <div class="container custom__container">
    <!-- Heading -->
    <div class="row align-items-end work-process-area__one-title">
      <div class="col-xl-7 col-lg-7">
        <div class="work-process-area__one-content-left">
          <h2>Other Campus</h2>
          <p>
            Check out our locations, get to choose your preferred site for
            worship.
          </p>
        </div>
      </div>
    </div>

    <!-- Full-width Map -->
    <div class="row">
      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15797.995287930997!2d4.2668189!3d8.1523918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10370dad95acfb9d%3A0x90b211af416dcc05!2sTehillah%20Baptist%20Church!5e0!3m2!1sen!2sng!4v1718639359959!5m2!1sen!2sng"
          width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="py-4">
          <div class="text-center">
            <img src="assets/img/tehilla.png" alt="Tehillah Baptist Church" class="img-fluid mb-3"
              style="width: 120px; height: auto" style="width: 60px; height: auto" />
            <h1 class="h3 font-weight-bold mb-2">
              Tehillah Baptist Church, Ogbomoso
            </h1>
            <div class="d-flex justify-content-center align-items-center mb-4">
              <i class="bx bx-current-location text-primary"></i>
              <p class="text-primary ml-2 mb-0">
                Adekehin Close, Behind Alata Milk & Honey, Under G,
                Ogbomoso, Oyo State, Nigeria.
              </p>
            </div>
          </div>

          <div class="mt-4">
            <p class="h4 font-weight-bold">
              Same experience different location
            </p>
            <p class="mt-2">Join us at our other campus.</p>
            <p class="mt-2">
              If you're unable to join us at our main church, we invite you
              to visit our campus, Tehillah Baptist Church. We share the
              same vision and values, with a convenient and accessible
              location. Come experience the warmth and connection of our
              church at either location.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- TBC Location End -->

<?php include('template/footer.php') ?>