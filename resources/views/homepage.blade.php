@extends('layout.app')
@section('content')
 <!-- Banner Area Start Here-->
 <section class="about-wrap-layout2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="text-center mb-5 pt-2 pb-5">
          <h1 class="item-title" style="color: #14348e">
            Do you wish to see clearly without glasses?
          </h1>
          <h3>
            You have refractive error blurring your vision and you need
            spectacles to see clearly.
          </h3>
          <p>
            On the other hand we denounce with righteous indignation and
            dislike mr turet suscipit lobortis nisl ut aliquip erat
            volutpat autem vel eum iriure dolor in hendrerit in vulputate
            velit esse molestie consequat, vel illum dolore eu
            feugiate.pat autem vel eum iriure dolor in hendrerite.
          </p>
          <a href="#" class="btn mt-4">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner Area End Here -->

<!-- Slider Area Start Here -->
<div class="slider-area slider-layout2 bg-light-primary100">
  <div class="swiper homeSlider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://dummyimage.com/1920x650/a0b4db/0011ff" alt="" />
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/1920x650/a0b4db/0011ff" alt="" />
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/1920x650/a0b4db/0011ff" alt="" />
      </div>
      <div class="swiper-slide">
        <img src="https://dummyimage.com/1920x650/a0b4db/0011ff" alt="" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="drag ui-widget-content d-none d-lg-block" id="drag">
    <div class="slider_appointment_form" id="slider_appointment_form">
      <h4>Book Your Consultation</h4>
      <p>Complete the form to start your journey</p>
      <form action="">
        <div class="form-row">
          <div class="col">
            <input
              type="text"
              class="form-control"
              placeholder="First name"
              name="first_name"
            />
          </div>
          <div class="col">
            <input
              type="text"
              class="form-control"
              placeholder="Last name"
              name="last_name"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email Address"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <input
              type="text"
              name="phone"
              class="form-control"
              placeholder="Phone Number"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <p><b>When?</b></p>
            <input type="radio" name="when" /> ASAP
            <input type="radio" name="when" id="" /> Next Month
          </div>
          <div class="col">
            <p><b>Best time for you?</b></p>
            <input type="checkbox" name="best_time" /> Anytime
            <input type="checkbox" name="" /> Morning
            <input type="checkbox" name="" id="" /> Afternoon
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <button type="submit" class="btn btn-light mx-auto d-block">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Slider Area End Here -->
<!-- Text Area Start Here -->
<div class="homepage-text-area">
  <div class="container">
    <div class="row">
      <div class="col-md-6 px-5">
        <h2>Freedom from spectacles and contact lenses</h2>
      </div>
      <div class="col-md-6">
        <p>
          Laser eye surgery might be an option for you. if you were
          looking for an alternative to your spectacles or contact lens.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Text Area End Here -->
<!-- Laser Surgery Area Start Here -->
<section class="laser_surgery mt-5 mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 laser-surgery-left">
        <h2>About Laser Eye Surgery</h2>
        <div class="row menu-list">
          <div class="col-xl-6 col-lg-6 col-md-6 col-12 menu-item">
            <div class="departments-box-layout1">
              <div class="item-img">
                <img
                  src="img/department/department1.jpg"
                  alt="department"
                  class="img-fluid"
                />
                <div class="item-btn-wrap">
                  <a href="single-department.html" class="item-btn"
                    >Details</a
                  >
                </div>
              </div>
              <div class="item-content">
                <h3 class="item-title">
                  <a href="single-department.html">About LASIK</a>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-12 menu-item">
            <div class="departments-box-layout1">
              <div class="item-img">
                <img
                  src="img/department/department2.jpg"
                  alt="department"
                  class="img-fluid"
                />
                <div class="item-btn-wrap">
                  <a href="single-department.html" class="item-btn"
                    >Details</a
                  >
                </div>
              </div>
              <div class="item-content">
                <h3 class="item-title">
                  <a href="single-department.html">About Smile</a>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-12 menu-item">
            <div class="departments-box-layout1">
              <div class="item-img">
                <img
                  src="img/department/department3.jpg"
                  alt="department"
                  class="img-fluid"
                />
                <div class="item-btn-wrap">
                  <a href="single-department.html" class="item-btn"
                    >Details</a
                  >
                </div>
              </div>
              <div class="item-content">
                <h3 class="item-title">
                  <a href="single-department.html">About PRK</a>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-12 menu-item">
            <div class="departments-box-layout1">
              <div class="item-img">
                <img
                  src="img/department/department4.jpg"
                  alt="department"
                  class="img-fluid"
                />
                <div class="item-btn-wrap">
                  <a href="single-department.html" class="item-btn"
                    >Details</a
                  >
                </div>
              </div>
              <div class="item-content">
                <h3 class="item-title">
                  <a href="single-department.html"
                    >About Blended Vision</a
                  >
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-center">
        <img src="https://dummyimage.com/600x600/e9e9e9/999" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- Laser Surgery Area End Here  -->

<!-- Testimonial Area Start Here -->
<section class="testimonial-wrap-layout1 py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>
          <b
            >What do people say about LASER eye surgery at <br />
            Refractive surgery Unit <br />
            Tilganga Institute of Ophthalmology</b
          >
        </h2>
        <a href="#" class="my-2 btn btn-primary btn-lg"
          >View All Testimonials <i class="fas fa-chevron-right"></i
        ></a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-3">
        <div class="testmonial-box-layout1">
          <div class="item-img">
            <img
              src="img/testimonial/testimonial3.jpg"
              class="img-fulid rounded-circle"
              alt="Robert Addison"
            />
          </div>
          <div class="item-content">
            <p>
              Rimply dummy text of the printing and tRimply dummy text of
              the printing and typesetting industry. psum has been the
              industry.
            </p>
            <h3 class="item-title">Robert Adison</h3>
            <h4 class="sub-title">Professor</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="home_misc">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="misc_img">
          <img src="https://dummyimage.com/600x600/e9e9e9/999" alt="" />
        </div>
      </div>
      <div class="col-md-6 d-flex flex-column">
        <div class="home_misc_right">
          <h3>Not Sure What to do?</h3>
          <ul class="disc">
            <li><a href="#">Eligible for lASER eye surgery?</a></li>
            <li><a href="faq.html">FAQ</a></li>
          </ul>
          <p class="mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Impedit assumenda, optio reiciendis non rem aut pariatur quis
            dolores dolor quaerat amet praesentium expedita veniam
            mollitia quibusdam sit porro neque hic earum consectetur
            voluptatum facere vel commodi! Nisi quo
          </p>
        </div>
        <div class="home_misc_right">
          <h3>Decided for SX</h3>
          <h4>How Do I Proceed for Service</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Voluptatem numquam necessitatibus distinctio veniam illo
            sapiente ea, optio facilis quos magni!
          </p>
          <ul class="disc">
            <li><a href="#">Process for Appointment</a></li>
            <li><a href="#">How do i go around the department?</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="team_equipment bg-accent100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <h2><b>Team</b></h2>
        <h4>National leader in laser eye surgry</h4>
        <a href="#" class="btn btn-primary btn-lg mb-5"
          >Our Team <i class="fas fa-chevron-right"></i
        ></a>
        <img
          src="https://dummyimage.com/600x600/e9e9e9/999&text=Team+Picture"
          alt=""
        />
      </div>
      <div class="col-md-6 text-center">
        <h2><b>Equipment</b></h2>
        <h4>State of art in Technology</h4>
        <a href="#" class="btn btn-primary btn-lg mb-5"
          >Equipments <i class="fas fa-chevron-right"></i
        ></a>
        <img
          src="https://dummyimage.com/600x600/e9e9e9/999&text=Equipments"
          alt=""
        />
      </div>
    </div>
  </div>
</section>
<!-- Banner Area Start Here -->
<section
  class="banner-wrap-layout1 parallaxie"
  data-bg-image="img/figure/figure6.jpg"
>
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-8 col-md-10 col-12">
        <div class="banner-box-layout1">
          <h2 class="item-title">For Emergency Cases</h2>
          <h3 class="phone-number">1-800-555-0120</h3>
          <p>
            Building a healthy environment that supports development for
            the community. Your personal case manager will ensure that you
            receive the best possible care.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner End Here -->
<!-- Blog-Area Start Here -->
<section class="blog-wrap-layout1 bg-accent100">
  <div class="container">
    <div class="section-heading heading-dark text-center heading-layout1">
      <h2>Latest From Blog</h2>
      <p>Stay Updated With Us</p>
    </div>
    <div class="row">
      <div class="blog-col-1st col-xl-4 col-lg-6 col-md-6 col-12">
        <div class="blog-box-layout2">
          <div class="item-img">
            <a href="single-news.html">
              <img
                src="img/blog/blog18.jpg"
                class="img-fluid"
                alt="blog"
              />
            </a>
          </div>
          <div class="item-content">
            <div class="post-date">17/09/2018</div>
            <h3 class="item-title">
              <a href="single-news.html"
                >Your Medical Records are Safe now a days.</a
              >
            </h3>
            <p>
              Medicallaore nostrud exerci tation ulm hedi corper turet
              ipsum dolor sit amet, consectetuer adipiscing elitertye.
            </p>
            <div class="post-actions-wrapper">
              <ul>
                <li>
                  <a class="item-btn" href="single-news.html"
                    >Read More<i class="fas fa-long-arrow-alt-right"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-col-2nd col-xl-4 col-lg-6 col-md-6 col-12">
        <div class="blog-box-layout2">
          <div class="item-img">
            <a href="single-news.html">
              <img
                src="img/blog/blog19.jpg"
                class="img-fluid"
                alt="blog"
              />
            </a>
          </div>
          <div class="item-content">
            <div class="post-date">15/09/2018</div>
            <h3 class="item-title">
              <a href="single-news.html"
                >Your Medical Records are Safe now a days.</a
              >
            </h3>
            <p>
              Medicallaore nostrud exerci tation ulm hedi corper turet
              ipsum dolor sit amet, consectetuer adipiscing elitertye.
            </p>
            <div class="post-actions-wrapper">
              <ul>
                <li>
                  <a class="item-btn" href="single-news.html"
                    >Read More<i class="fas fa-long-arrow-alt-right"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog-Area End Here -->
@endsection