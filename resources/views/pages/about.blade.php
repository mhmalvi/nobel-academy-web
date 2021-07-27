@extends('layouts.app')
@section('title', 'About Us')
@push('css')
    <style>
        .item h3 a{
            color: #002B46 !important;
        }

        .item:hover h3 a{
            color: #3FD4FB !important;
        }
    </style>
@endpush

@section('content')
    <!--Page Header-->
    <section class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>About NTA</h1>
                    <p>We offer certified courses in the beauty industry that you can rely on</p>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>About NTA</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header-->


    <!--ABout US-->
    <section id="about" class="padding">
        <div class="container aboutus">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
                    <h2 class="heading heading_space">Who We Are <span class="divider-left"></span></h2>
                    <p class="bottom25 text-justify" style="font-size: 1rem; line-height: 1.2;">It’s all going about
                        making ideas
                        happen. Nor again is there anyone who loves or
                        pursues or desires</p>
                    <p class="bottom25 text-justify" style="font-size: 1rem; line-height: 1.2;">Noble Training Academy was
                        established
                        in 2016 and is
                        privately operated Registered Training Organisation.
                        Our courses are provided within Australia. We offer a range of nationally recognised qualifications
                        from Certificate III to Diploma level in beauty industry.</p>
                    <p class="bottom25 text-justify" style="font-size: 1rem; line-height: 1.2;">Dedicated to our duty as a
                        nationally
                        recognised
                        training provider, we want to empower our students with the right blend of theoretical and pragmatic
                        knowledge.</p>
                </div>
                <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image">
                        <img src="{{ asset('assets/images/about/about-01.svg') }}" alt="NTA">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABout US-->

    <!-- Company History -->
    <section id="history" class="padding bg_grey">
        <div class="container aboutus">
            <div class="card mb-3" style="background-color: transparent; border: 0px;">
                <h2 class="heading text-center">Mission<span class="divider-center"></span></h2>
                <div style="padding: 20px 0px;"></div>
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/about/mission.svg') }}" style="max-width: 450px;"
                            alt="contact from">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div style="padding: 20px 0px;"></div>
                            <p class="text-justify" style="font-size: 1rem; line-height: 2;">
                                Our mission is to provide quality training and assessment that will make you proficient in
                                required skills on successive completion of the enrolled course. With us, you take a step
                                forward in your career. We support our students at all time and guide throughout the
                                training as well as go beyond to ensure that we meet your expectations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company History -->

    <!-- University Tour -->
    <section id="tours" class="padding">
        <div class="container aboutus">
            <div class="card mb-3" style="background-color: transparent; border: 0px;">
                <h2 class="heading text-center">Vision<span class="divider-center"></span></h2>
                <div style="padding: 20px 0px;"></div>
                <div class="row no-gutters">
                    <div class="col-md-7">
                        <div class="card-body">
                            <div style="padding: 30px 0px;"></div>
                            <p class="text-justify" style="font-size: 1; line-height: 2;">
                                We intend to grow exponentially catering our training to every nook in Australia.
                                <br>
                                <br>
                                We believe, with our expertise you can upscale your skills.
                                In accordance with the Australian Qualification Framework (AQF) accredited qualifications
                                and accredited courses use RPL (Recognition of Prior Learning), RCC (Recognition of Current
                                Competencies),
                                and Gap Training to evaluate the training participant's level of skill or competence against
                                the endorsed industry or enterprise competency standards or outcomes specified.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/about/vission.svg') }}" style="max-width: 450px;"
                            alt="contact from">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- University Tour -->
    
        <!-- Company History -->
    <section id="history" class="padding bg_grey">
        <div class="container aboutus">
            <div class="card mb-3" style="background-color: transparent; border: 0px;">
                <h2 class="heading text-center">What We Do<span class="divider-center"></span></h2>
                <div style="padding: 20px 0px;"></div>
                <div class="row no-gutters">
                    @php
                    $DBT = 'This qualification reflects the role of individuals employed as beauty therapists to provide a broad range of beauty therapy treatments and services including facial treatments, body massage and treatments, hair removal, lash and brow treatments, nail and make-up services.';
                    $CBT = 'This qualification reflects the role of individuals who work as beauty therapists to provide a range of beauty therapy treatments and services, including lash and brow treatments, nail services, make-up, massage and waxing.';
                    $CHD = 'This qualification reflects the role of hairdressers who use a range of well-developed sales, consultation and technical skills and knowledge to provide a broad range of hairdressing services to clients.';
                    $DRM = 'This qualification reflects the role of remedial massage therapists who work with clients presenting with soft tissue dysfunction, musculoskeletal imbalance or restrictions in range of motion (ROM).';
                    @endphp
                    <div class="col-md-12">
                        <div class="slider_wrapper">
                            <div id="course_slider" class="owl-carousel">
                                <div class="item">
                                    <div class="image bottom20">
                                        <img src="{{ asset('assets/images/courses/thumb01.jpg') }}" alt="Courses"
                                            class="img-responsive border_radius">
                                    </div>
                                    <h3 class="bottom15"><a href="{{ route('diplomaInBeauty') }}" class="course_name">SHB50115
                                            -
                                            Diploma in Beauty Therapy</a></h3>
                                    <p class="bottom15">
                                        <?php echo mb_strimwidth($DBT, 0, 200, '...'); ?>
                                    </p>
                                    <a href="{{ route('diplomaInBeauty') }}" class="btn_common blue border_radius">Read
                                        More</a>
                                </div>
                                <div class="item">
                                    <div class="image bottom20">
                                        <img src="{{ asset('assets/images/courses/thumb02.jpg') }}" alt="Courses"
                                            class="img-responsive border_radius">
                                    </div>
                                    <h3 class="bottom15"><a href="{{ route('beautyTherapy') }}" class="course_name">SHB40115
                                            -
                                            Certificate IV in Beauty Therapy</a></h3>
                                    <p class="bottom15">
                                        <?php echo mb_strimwidth($CBT, 0, 200, '...'); ?>
                                    </p>
                                    <a href="{{ route('beautyTherapy') }}" class="btn_common blue border_radius">Read
                                        More</a>
                                </div>
                                <div class="item">
                                    <div class="image bottom20">
                                        <img src="{{ asset('assets/images/courses/thumb03.jpg') }}" alt="Courses"
                                            class="img-responsive border_radius">
                                    </div>
                                    <h3 class="bottom15"><a href="{{ route('hairdressing') }}" class="course_name">SHB30416 -
                                            Certificate III in Hairdressing</a></h3>
                                    <p class="bottom15">
                                        <?php echo mb_strimwidth($CHD, 0, 200, '...'); ?>
                                    </p>
                                    <a href="{{ route('hairdressing') }}" class="btn_common blue border_radius">Read More</a>
                                </div>
                                <div class="item">
                                    <div class="image bottom20">
                                        <img src="{{ asset('assets/images/courses/thumb04.jpg') }}" alt="Courses"
                                            class="img-responsive border_radius">
                                    </div>
                                    <h3 class="bottom15"><a href="{{ route('diplomaInRemedial') }}"
                                            class="course_name">HLT52015 - Diploma in Remedial Massage</a></h3>
                                    <p class="bottom15">
                                        <?php echo mb_strimwidth($DRM, 0, 200, '...'); ?>
                                    </p>
                                    <a href="{{ route('diplomaInRemedial') }}" class="btn_common blue border_radius">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company History -->

    <!-- University Tour -->
    <section id="tours" class="padding">
        <div class="container aboutus">
            <div class="card mb-3" style="background-color: transparent; border: 0px;">
                <h2 class="heading text-center">How We Do<span class="divider-center"></span></h2>
                <div style="padding: 20px 0px;"></div>
                <p class="text-center">IT IS ALL COMPLETED IN FOLLOWING FIVE STEPS</p>
                <div style="padding: 20px 0px;"></div>
                <div class="row number-counters">
                    <div class="col-md-3 col-sm-4">
                        <div class="counters-item mb-5">
                            <i class="icon-checkmark3"></i>
                            <strong data-to="1">0</strong>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Unit Assesment Summery</p>
                        </div>
                        <div class="counters-item last mt-5">
                            <i class="icon-checkmark3"></i>
                            <strong data-to="2">0</strong>
                            <p>Workbook</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="fact-image">
                            <img src="{{asset('assets/images/about/steps.png')}}" alt="some facts" class="img-responsive text-center">
                        </div>
                        <div class="counters-item">
                            <i class="icon-checkmark3"></i>
                            <strong data-to="3">0</strong>
                            <p>Powerpoint Presentation</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="counters-item">
                            <i class="icon-checkmark3"></i>
                            <strong data-to="5">0</strong>
                            <p>Assesment</p>
                        </div>
                        <div class="counters-item last">
                            <i class="icon-checkmark3"></i>
                            <strong data-to="4">0</strong>
                            <p>Resources</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- University Tour -->
    
    
    <section id="testinomila_page" class="padding bg_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h2 class="heading heading_space">What People Say ?<span class="divider-left"></span></h2>
                </div>
            </div>
            <div id="js-grid-masonry" class="cbp">
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. Innovativeness is 
                            the pledge of our stable development. We tap into the most successful international management data, forestalling market.
                        </p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.
                            Innovativeness is the pledge of our stable development. We tap into successful.
                        </p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. Innovativeness is the 
                            pledge of our stable development. We tap into the most successful international management data, forestalling market.
                        </p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.
                            Innovativeness is the pledge of our stable development. We tap into successful.
                        </p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap">
                    <div class="testimonial_wrap">
                        <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                        </div>
                        <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="cbp-item">
                    <div class="cbp-caption-defaultWrap testimonial_wrap">
                    <div class="testimonial_text text-center">
                        <img src="{{asset('assets/images/quote.png')}}" alt="quote" class="quote">
                        <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. Innovativeness is the pledge of our stable development. We tap into the most successful international management data, forestalling market.</p>
                    </div>
                    <div class="testimonial_pic">
                        <img src="{{asset('assets/images/testinomial1.jpg')}}" alt="testimonial" width="59">
                        <span class="color">John Smith</span>
                        <span class="post_img">Owner Edua</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
