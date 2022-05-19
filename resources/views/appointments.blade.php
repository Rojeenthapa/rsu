@extends('layout.app')
@section('content')
   <!-- Inne Page Banner Area Start Here -->
   <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="img/figure/figure2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Appointment Form</h1>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Appointment Form Area Start Here -->
<section class="appointment-wrap-layout1 bg-light-accent100">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <div class="appointment-box-layout1">
                    <h2 class="title title-bar-primary2">Make an Appointment</h2>
                    <p>Efficiently myocardinate market-driven innovation via open-source alignments.
                        Dramatically engage
                        porescently.</p>
                    <form>
                        <div class="row gutters-15">
                            <div class="col-12 form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Select Department *</option>
                                    <option value="1">Gynaecology</option>
                                    <option value="2">Cardiology</option>
                                    <option value="3">Orthopaedics</option>
                                    <option value="4">Medicine</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <select class="select2" data-error="Phone field is required" required>
                                    <option value="">Choose Doctor by Name *</option>
                                    <option value="1">Dr. Mou</option>
                                    <option value="2">Dr. Kalvin</option>
                                    <option value="3">Dr. Mark Willy</option>
                                    <option value="4">Dr. Zinia Zara</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" placeholder="Patient Name *" class="form-control" name="name"
                                    id="form-name" data-error="Name field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Phone *" class="form-control" name="Phone" id="form-phone"
                                    data-error="Phone field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" placeholder="E-mail *" class="form-control" name="email" id="form-email"
                                    data-error="E-mail field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <i class="far fa-calendar-alt"></i>
                                <input type="text" class="form-control rt-date" placeholder="Appointment Date *"
                                    name="date" id="form-date" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <i class="far fa-clock"></i>
                                <input type="text" class="form-control rt-time" placeholder="Time *" name="time"
                                    id="form-time" data-error="Subject field is required" required />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Type Appintment Note" class="textarea form-control" name="message"
                                    id="form-message" rows="5" cols="20" data-error="Message field is required"
                                    required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group text-center">
                                <button class="item-btn">Make an Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="appointment-banner">
                    <img src="img/figure/figure2.png" alt="appointment" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appointment Form Area End Here -->
@endsection