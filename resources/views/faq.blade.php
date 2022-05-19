@extends('layout.app')
@section('content')
  <!-- Inne Page Banner Area Start Here -->
  <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="img/figure/figure2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Faq’s Page</h1>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>Faq’s</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Faq Content Area Start Here -->
<section class="faq-wrap-layout1">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-12">
                <div class="faq-content-layout1">
                    <div class="item-heading">
                        <h2 class="item-title title-bar-primary4">Frequently Ask Any Question</h2>
                        <p class="sub-title">Have you any kind of question, please feel free ask us.</p>
                    </div>
                    <div class="faq-list-layout1">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle text-row-1" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Can I request a copy of my MRI Online?</a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum
                                            has been the industry’s standard dummy text ever since thelong established
                                            fact thaaret </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What if I don’t have insurance</a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum
                                            has been the industry’s standard dummy text ever since thelong established
                                            fact thaaret </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Vitae nulla bibendum molestie liquet?</a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum
                                            has been the industry’s standard dummy text ever since thelong established
                                            fact thaaret </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Accepting Insurance Cards</a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum
                                            has been the industry’s standard dummy text ever since thelong established
                                            fact thaaret </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Accepting Insurance Cards</a>
                                    </div>
                                </div>
                                <div aria-expanded="false" id="collapseFive" role="tabpanel" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Moimply dummy text of the printing and type settingaindustry. Lorem Ipsum
                                            has been the industry’s standard dummy text ever since thelong established
                                            fact thaaret </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                <div class="faq-img-layout1">
                    <img src="img/figure/faq.png" alt="about" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Content Area End Here -->
<!-- Faq Form Area Start Here -->
<section class="faq-wrap-layout2 bg-light-accent100">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8">
                <div class="faq-ask-question-layout1">
                    <h2 class="title">Ask Us if you have any question?</h2>
                    <form class="faq-question-box">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="First Name *" class="form-control" name="Phone" data-error="Phone field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" placeholder="Last Name *" class="form-control" name="email" data-error="E-mail field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="E-mail *" class="form-control" name="subject" data-error="Subject field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Phone *" class="form-control" name="subject" data-error="Subject field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <select class="select2">
                                    <option value="0">Select Subject *</option>
                                    <option value="1">Dr. Mou</option>
                                    <option value="2">Dr. Kalvin</option>
                                    <option value="3">Dr. Mark Willy</option>
                                    <option value="4">Dr. Zinia Zara</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required"
                                    required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <button class="item-btn">Submit Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Form Area End Here -->
@endsection