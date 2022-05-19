@extends('layout.app')
@section('content')
<header id="header_2">
    <section class="contact-wrap-layout">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="contact-box-layout1">
                <h3 class="title title-bar-primary4">Contact Details</h3>
                <div class="contact-info">
                  <p>Nepal Eye Program</p>
                  <p>Tilganga Institute of Ophthalmology</p>
                  <p>Block A (Old Building) First Floor</p>
                  <p>Gaushala, Bagmati Bridge</p>
                  <p>Post Box No 561</p>
                  <p>Kathmandu, Nepal</p>
                  <p class="m-0"><strong>Contact No:</strong> +977 1 4484574</p>
                  <small
                    >(Alternatively you can call +977 1 5970048 ask for
                    extension no. 602)</small
                  >
                  <p>
                    <strong>Email Us:</strong>
                    <a href="mailto:rsuappointment@tilganga.org"
                      >rsuappointment@tilganga.org</a
                    >
                  </p>
                  <h4 class="mb-1"><strong> Working Hour:</strong></h4>
                  <p>Sunday - Friday: 8:00 AM - 5:00 PM</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="contact-box-layout1">
                <h3 class="title title-bar-primary4">
                  Feedback and Query Form
                </h3>
                <form class="contact-form-box" id="contact-form">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input
                        type="text"
                        placeholder="First Name *"
                        class="form-control"
                        name="first_name"
                        data-error="First Name is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input
                        type="text"
                        placeholder="Last Name *"
                        class="form-control"
                        name="last_name"
                        data-error="Last Name is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input
                        type="email"
                        placeholder="E-mail *"
                        class="form-control"
                        name="email"
                        data-error="Email is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <input
                        type="text"
                        placeholder="Phone *"
                        class="form-control"
                        name="phone"
                        data-error="Phone field is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group">
                      <input
                        type="text"
                        placeholder="Subject *"
                        class="form-control"
                        name="subject"
                        data-error="Subject field is required"
                        required
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group">
                      <textarea
                        placeholder="Message*"
                        class="textarea form-control"
                        name="message"
                        id="form-message"
                        rows="7"
                        cols="20"
                        data-error="Message field is required"
                        required
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-12 form-group margin-b-none">
                      <button type="submit" class="item-btn">
                        Submit Message
                      </button>
                    </div>
                  </div>
                  <div class="form-response"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="google-map-area my-5">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.378025057046!2d85.34826501480065!3d27.70561228279257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1981f114d961%3A0xd4b4f33375050e34!2sTilganga%20Institute%20of%20Ophthalmology!5e0!3m2!1sen!2snp!4v1648376082037!5m2!1sen!2snp"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>
      <!-- Contacts Us Area End Here -->
      <section class="tio-holidays my-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="tio_holiday_content">
                <h3><strong>TIO Holidays</strong></h3>
                <p>
                  TIO holidays information will help you plan your appointments
                  with us. We decide our holidays at the beginning of every
                  Nepali calendar year.
                </p>
                <table class="table table-responsive table-striped table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">SN.</th>
                      <th scope="col">Date AD</th>
                      <th scope="col">Date BS</th>
                      <th scope="col">Day</th>
                      <th scope="col">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>1st January 2022</td>
                      <td>1st Baisakh 2078</td>
                      <td>Monday</td>
                      <td>idk</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>2nd January 2022</td>
                      <td>2nd Baisakh 2078</td>
                      <td>Tuesday</td>
                      <td>idk</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>3rd January 2022</td>
                      <td>3rd baisakh 2078</td>
                      <td>Friday</td>
                      <td>idk</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>4th January 2022</td>
                      <td>4th Baisakh 2078</td>
                      <td>Sunday</td>
                      <td>Idk</td>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection